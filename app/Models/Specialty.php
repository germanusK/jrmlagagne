<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $table = "specialties";

    protected $fillable = ['name', 'caption', 'photo', 'description', 'project_id', 'selection_reason'];

    protected $dates = ['created_at', 'updated_at'];


    public function project()
    {
        # code...
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function samples()
    {
        # code...
        return $this->hasMany(SpecialtySample::class, 'specialty_id');
    }
}
