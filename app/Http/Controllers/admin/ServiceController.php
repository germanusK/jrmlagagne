<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    
    public function _index(Request $request, $id=null){
        $data['title'] = "Services Listing";
        $data['services'] = Service::orderBy('title')->get();
        $data['title'] = "Services Listing";
        if($id != null){
            $data['service'] = Service::find($id);
            return view('admin.services.details', $data);
        }
        return view('admin.services.index', $data);
    }
    
    public function images(Request $request, $id){
        $data['item'] = Service::find($id);
        $data['title'] = "Services Images For ".$data['item']->title??'';
        $data['images'] = $data['item']->images;
        return view('admin.gallery', $data);
    }

    public function edit_images(Request $request, $id){
        $data['item'] = Service::find($id);
        $data['title'] = "Service Images For ".$data['item']->title??'';
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
        \App\Models\ServiceImage::whereNotIn('id', $old_images)->get()->each(function($rec){
            // unlink the image
            if(file_exists($rec->image_path)) unlink($rec->image_path);
            $rec->delete;
        });

        if(($new_images = $request->file('new_images')) != null){
            $records = [];
            $service = Service::find($id);
            foreach ($new_images as $key => $image) {
                # code...
                $fxt = $image->getClientOriginalExtension();
                $fname = time().rand().'.'.$fxt;
                $dir = asset('uploads/services/images/service'.$id);
                Storage::disk('public_uploads')->put('services/images/service'.$id.'/'.$fname, $image);
                // $image->move($dir, $fname);
                $records[] = ['service_id'=>$id, 'image_path'=>$dir.'/'.$fname, 'subject'=>$service->name??''];
            }
            \App\Models\ProjectImage::insert($records);
        }
        return back()->with('success', 'Done');
    }
    
    public function _projects(Request $request, $id){
        $data['service'] = Service::find($id);
        $data['title'] = "Services Projects For ".$data['service']->title??'';
        $data['projects'] = $data['service']->projects;
        return view('admin.projects.index', $data);
    }
    
    public function _properties(Request $request, $id){
        $data['service'] = Service::find($id);
        $data['title'] = "Services Properties For ".$data['service']->title??'';
        $data['properties'] = $data['service']->proerties;
        return view('admin.property.index', $data);
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

        if(($file = $request->file('featured_image')) != null){
            if(file_exists($instance->featured_image)){
                unlink($instance->featured_image);
            }
            $fxt = $file->getClientOriginalExtension();
            $fname = '__'.time().rand().'.'.$fxt;
            $fpath = asset('uploads/services/images');
            if(!file_exists($fname)){
                mkdir($fpath);
            }

            Storage::disk('public_uploads')->put("services/images/".$fname, $file);
            
            $instance->featured_image = $fpath.'/'.$fname;
            $instance->icon = '';
        }
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
