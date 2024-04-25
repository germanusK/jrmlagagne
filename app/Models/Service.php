<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = ['title', 'caption', 'featured_image', 'icon', 'details', 'project_id'];

    protected $dates = ['created_at', 'updated_at'];


    public function images()
    {
        # code...
        return $this->hasMany(ServiceImage::class, 'service_id');
    }

    public function project()
    {
        # code...
        return $this->belongsTo(Project::class, 'project_id');
    }
}
