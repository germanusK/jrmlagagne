<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    //
        
    public function _index(Request $request, $id=null){
        $data['title'] = "Property Listing";
        $data['services'] = Property::orderBy('title')->get();
        if($id != null){
            $data['service'] = Property::find($id);
            return view('admin.property.details', $data);
        }
        return view('admin.property.index', $data);
    }

    public function save(Request $request, $id=null){
        $validity = Validator::make($request->all(), []);
        if($validity->fails()){
            session()->flash('error', $validity->errors()->first());
            return back()->withInput();
        }
        if($id != null){$instance = Property::find($id);
        }else{$instance = new Property();}

        $instance->fill($request->all());
        $instance->save();
        return back()->with('success', "Operation Complete");
    }

    public function editor(Request $request, $id=null){
        $data['title'] = "Create New Property";
        $data['action'] = 'create';
        if($id != null){
            $data['action'] = "edit";
            $data['title']= "Edit Exsiting Property";
            $data['service'] = Property::find($id);
        }
        return view('admin.property.editor', $data);
    }

    public function delete(Request $request, $id){
        $service = Property::find($id);
        if($service == null) return back()->with('error', 'Could not find the specified service');
        $service->delete();
        return back()->with('success', "Service deleted successfully");
    }
}
