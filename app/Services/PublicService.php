<?php

namespace App\Services;

use App\Models\Center;
use App\Models\Contact;
use App\Models\News;

class PublicService{

    public function __construct()
    {
        # code...
    }

    public function services($project_id = null)
    {
        # code...
    }

    public function projects()
    {
        # code...
    }

    public function project($project_id)
    {
        # code...
    }

    public function specialties($project_id = null)
    {
        # code...
    }

    public function specialty($specialty_id = null)
    {
        # code...
    }

    public function events($project_id = null)
    {
        # code...
    }

    public function news($project_id = null)
    {
        # code...
        return News::whereDate('expires_on', '>=', now())->get();
    }

    public function contacts($center_id = null)
    {
        # code...
        return $center_id == null ?
            Contact::all() :
            Contact::where('center_id', $center_id)->get();
    }

    public function centers()
    {
        # code...
        return Center::all();
    }

}