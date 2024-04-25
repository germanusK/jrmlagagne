<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;

    protected $table = "event_images";

    protected $fillable = ['event_id', 'image_path', 'subject', 'caption'];

    protected $dates = ['created_at', 'updated_at'];


    public function event()
    {
        # code...
        return $this->belongsTo(Event::class, 'event_id');
    }
}
