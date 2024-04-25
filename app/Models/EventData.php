<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventData extends Model
{
    use HasFactory;

    protected $table = "event_data";

    protected $fillable = ['event_id', 'registered_population', 'special_cases', 'general_details'];

    protected $dates = ['created_at', 'updated_at'];


    public function event()
    {
        # code...
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function equipment_used()
    {
        # code...
        return $this->belongsTo(Equipment::class, EquipmentUsed::class);
    }
}
