<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCenter extends Model
{
    use HasFactory;

    protected $table = "project_centers";

    protected $fillable = ['project_id', 'center_id'];

    protected $dates = ['created_at', 'updated_at'];


    public function project()
    {
        # code...
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function center()
    {
        # code...
        return $this->belongsTo(Center::class, 'center_id');
    }
}
