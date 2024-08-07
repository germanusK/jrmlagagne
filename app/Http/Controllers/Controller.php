<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        # code...
        return view('showcase.index');
    }

    public function contact()
    {
        # code...
        return view('showcase.contact');
    }

    public function about()
    {
        # code...
        return view('showcase.about');
    }

    public function projects($service_slug = null)
    {
        # code...
        return view('showcase.projects');
    }

    public function project_details($project_slug)
    {
        # code...
        return view('showcase.project_details');
    }

    public function service_details($service_slug)
    {
        # code...
        return view('showcase.service_details');
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
