<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $table = "centers";

    protected $fillable = ['region', 'town', 'address', 'tel', 'email'];

    protected $dates = ['created_at', 'updated_at'];


    public function contacts()
    {
        # code...
        return $this->hasMany(Contact::class, 'center_id');
    }

    public function projects()
    {
        # code...
        return $this->belongsToMany(Project::class, ProjectCenter::class);
    }

    public function project_centers()
    {
        # code...
        return $this->hasMany(ProjectCenter::class, 'center_id');
    }
}
