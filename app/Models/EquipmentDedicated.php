<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentDedicated extends Model
{
    use HasFactory;

    protected $table = "equipment_dedicated";

    protected $fillable = ['event_id', 'equipment_id', 'quantity'];

    protected $dates = ['created_at', 'updated_at'];
    

    public function event()
    {
        # code...
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function equipment()
    {
        # code...
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }
}
