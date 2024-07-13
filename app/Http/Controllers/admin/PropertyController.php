<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    //
        
    public function _index(Request $request, $id=null){
        $data['title'] = "Property Listing";
        $data['properties'] = Property::orderBy('title')->get();
        if($id != null){
            $data['property'] = Property::find($id);
            return view('admin.property.details', $data);
        }
        return view('admin.property.index', $data);
    }

    public function images(Request $request, $id){
        $data['item'] = Property::find($id);
        $data['title'] = "Property Images For ".$data['item']->title??'';
        $data['images'] = $data['item']->images;
        return view('admin.gallery', $data);
    }

    public function edit_images(Request $request, $id){
        $data['item'] = Property::find($id);
        $data['title'] = "Property Images For ".$data['item']->title??'';
        $data['images'] = $data['item']->images;
        return view('admin.gallery_editor', $data);
    }
        
    public function update_images(Request $request, $id){
        $validity = Validator::make($request->all(), ['old_images'=>'array', 'new_images'=>'array']);
        if($validity->fails()){
            return back()->with('error', $validity->errors()->first());
        }
        $old_images = $request->images;
        if($old_images == null){
            $old_images = [];
        }
        \App\Models\PropertyImage::whereNotIn('id', $old_images)->get()->each(function($rec){
            // unlink the image
            if(file_exists($rec->image_path)) unlink($rec->image_path);
            $rec->delete;
        });

        if(($new_images = $request->file('new_images')) != null){
            $records = [];
            $property = Property::find($id);
            foreach ($new_images as $key => $image) {
                # code...
                $fxt = $image->getClientOriginalExtension();
                $fname = time().rand().'.'.$fxt;
                $dir = asset('uploads/properties/images/property'.$id);
                $image->move($dir, $fname);
                $records[] = ['property_id'=>$id, 'image_path'=>$dir.'/'.$fname, 'subject'=>$property->name??''];
            }
            \App\Models\PropertyImage::insert($records);
        }
        return back()->with('success', 'Done');
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

        if(($file = $request->file('featured_image')) != null){
            if(filr_exists($instance->featured_image)){
                unlink($instance->featured_image);
            }
            $fxt = $file->getClientOriginalExtension();
            $fname = '__'.time().rand().'.'.$fxt;
            $fpath = asset('uploads/services/images');
            $file->move($fpath, $fname);
            $instance->featured_image = $fpath.'/'.$fname;
        }
        $instance->save();
        return back()->with('success', "Operation Complete");
    }

    public function editor(Request $request, $id=null){
        $data['title'] = "Create New Property";
        $data['action'] = 'create';
        if($id != null){
            $data['action'] = "edit";
            $data['title']= "Edit Exsiting Property";
            $data['property'] = Property::find($id);
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
