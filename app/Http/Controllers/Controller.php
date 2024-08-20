<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        # code...
        $data['services'] = Service::inRandomOrder()->get();
        $data['recent_works'] = Project::orderBy('id', 'DESC')->take(12)->get();
        $data['projects'] = Project::inRandomOrder()->take(12)->get();
        $project_images = ProjectImage::inRandomOrder()->take(18)->get();
        $service_images = ServiceImage::inRandomOrder()->take(18)->get();
        $data['gallery'] = $project_images->merge($service_images)->shuffle();
        return view('showcase.index', $data);
    }

    public function contact()
    {
        # code...
        return view('showcase.contact');
    }

    public function contact_post(Request $request){
        $request->validate(['name'=>'required', 'email'=>'required|email', 'subject'=>'required', 'message'=>'required']);
        $mail = new ContactMail($request->name, $request->email, $request->subject, $request->message);
        Mail::send($mail);
    }

    public function about()
    {
        # code...
        return view('showcase.about');
    }

    public function projects($service_slug = null)
    {
        # code...
        $data['projects'] = $service_slug == null ?
            Project::orderBy('id', 'DESC')->paginate(36) :
            Project::where(['service_id'=>$service_slug])->orderBy('id', 'DESC')->paginate(36) ;
            
        // dd($data['projects']->items());
        return view('showcase.projects', $data);
    }

    public function project_details($project_slug)
    {
        # code...
        $data['project'] = Project::find($project_slug);
        $data['related_projects'] = Project::where('service_id', $data['project']->service_id)->take(12)->get();
        $data['services'] = Service::join('projects', 'projects.service_id', '=', 'services.id')->select(['services.*'])->distinct()->get();
        return view('showcase.project_details', $data);
    }

    public function service_details($service_slug)
    {
        # code...
        $data['service'] = Service::find($service_slug);
        return view('showcase.service_details', $data);
    }

    public function login()
    {
        # code...
        return view('showcase.login');
    }

    public function logout()
    {
        # code...
        session()->flush();
        auth()->logout();
    }

    public function authenticate(Request $request)
    {
        # code...
        $validity = validator()->make($request->all(), ['username'=>'required', 'password'=>'required']);
        if($validity->fails()){
            return redirect()->route('public.login')->with('error', $validity->errors()->first());
        }
        if(auth()->attempt(['email'=>$request->username, 'password'=>$request->password])){
            // dd($request->all());
            return redirect()->route('admin.home')->with('success', "Welcome to Admin Dashboard");
        }
        return redirect()->route('public.login')->with('error', 'Provided username and password is incorrect');
    }

}
