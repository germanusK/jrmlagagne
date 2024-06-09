<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    //
        
    public function _index(Request $request, $id=null){
        $data['title'] = "Projects Listing";
        $data['projects'] = Project::orderBy('title')->get();
        if($id != null){
            $data['project'] = Project::find($id);
            return view('admin.projects.details', $data);
        }
        return view('admin.projects.index', $data);
    }

    public function save(Request $request, $id=null){
        $validity = Validator::make($request->all(), []);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back()->withInput();
        }
        if($id != null){$instance = Project::find($id);
        }else{$instance = new Project();}

        $instance->fill($request->all());
        $instance->save();
        return back()->with('success', "Operation Complete");
    }

    public function editor(Request $request, $id=null){
        $data['title'] = "Create New Project";
        $data['action'] = 'create';
        if($id != null){
            $data['action'] = "edit";
            $data['title']= "Edit Exsiting Project";
            $data['service'] = Project::find($id);
        }
        return view('admin.projects.editor', $data);
    }

    public function delete(Request $request, $id){
        $service = Project::find($id);
        if($service == null) return back()->with('error', 'Could not find the specified service');
        $service->delete();
        return back()->with('success', "Service deleted successfully");
    }
}
