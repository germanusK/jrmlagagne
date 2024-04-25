<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = ['project_id', 'venue', 'subject', 'caption', 'details', 'start_date', 'end_date', 'target_population'];

    protected $dates = ['created_at', 'updated_at', 'start_date', 'end_date'];


    public function project()
    {
        # code...
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function images()
    {
        # code...
        return $this->hasMany(EventImage::class, 'event_id');
    }

    public function event_data()
    {
        # code...
        return $this->hasMany(EventData::class, 'event_id');
    }

    public function equipment_dedicated()
    {
        # code...
        return $this->hasMany(Equipment::class, EquipmentDedicated::class);
    }

    public function equipment_used()
    {
        # code...
        return $this->hasMany(EventData::class, EquipmentUsed::class);
    }
}
