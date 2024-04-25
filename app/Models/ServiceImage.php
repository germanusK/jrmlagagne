<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    use HasFactory;

    protected $table = "service_images";

    protected $fillable = ['service_id', 'image_path', 'subject', 'caption'];

    protected $dates = ['created_at', 'updated_at'];


    public function service()
    {
        # code...
        return $this->belongsTo(Service::class, 'service_id');
    }
}
