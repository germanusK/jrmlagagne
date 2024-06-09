<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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

}
