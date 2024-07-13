<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PublicData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $data['title'] = "Admin Dashboard";
        return view('admin.dashboard', $data);
    }
    //
    public function public_data(){
        $data['title'] = "Public Pages Content";
        $data['data'] = PublicData::all();
        return view('admin.public_data.index', $data);
    }
    //
    public function edit_public_data(){
        $data['title'] = "Edit Public Pages Content";
        $data['data'] = PublicData::all();
        return view('admin.public_data.editor', $data);
    }
    //
    public function save_public_data(Request $request, $id=null){
        if(count($request->all()) > 0){
            $data = PublicData::first();
            if($data != null)
                $data->update($request->all());
            else
                PublicData::create($request->all());
        }
        return back()->with('success', 'Done');
    }
}
