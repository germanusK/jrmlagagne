<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    
    public function _index(Request $request, $id=null){
        $data['title'] = "Services Listing";
        $data['services'] = Service::orderBy('title')->get();
        if($id != null){
            $data['service'] = Service::find($id);
            return view('admin.services.details', $data);
        }
        return view('admin.services.index', $data);
    }

    public function save(Request $request, $id=null){
        $validity = Validator::make($request->all(), []);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back()->withInput();
        }
        if($id != null){$instance = Service::find($id);
        }else{$instance = new Service();}

        $instance->fill($request->all());
        $instance->save();
        return back()->with('success', "Operation Complete");
    }

    public function editor(Request $request, $id=null){
        $data['title'] = "Create New Service";
        $data['action'] = 'create';
        if($id != null){
            $data['action'] = "edit";
            $data['title']= "Edit Exsiting Service";
            $data['service'] = Service::find($id);
        }
        return view('admin.services.editor', $data);
    }

    public function delete(Request $request, $id){
        $service = Service::find($id);
        if($service == null) return back()->with('error', 'Could not find the specified service');
        $service->delete();
        return back()->with('success', "Service deleted successfully");
    }
}
