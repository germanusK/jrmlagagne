<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable = ['title', 'target_population', 'public_impact', 'caption', 'description', 'problem_statement', 'featured_image', 'duration', 'start_date', 'end_date'];

    protected $dates = ['created_at', 'updated_at', 'start_date', 'end_date'];


    public function events()
    {
        # code...
        return $this->hasMany(Event::class, 'project_id');
    }

    public function images()
    {
        # code...
        return $this->hasMany(ProjectImage::class, 'project_id');
    }

    public function centers()
    {
        # code...
        return $this->belongsToMany(Center::class, ProjectCenter::class);
    }

    public function clients()
    {
        # code...
        return $this->belongsToMany(Client::class, Cases::class);
    }

    public function specialties()
    {
        # code...
        return $this->hasMany(Specialty::class, 'project_id');
    }


}
