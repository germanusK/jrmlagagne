<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentUsed extends Model
{
    use HasFactory;

    protected $table = "equipment_used";

    protected $fillable = ["equipment_id", 'event_data_id', 'quantity'];

    protected $dates = ['created_at', 'updated_at'];


    
    public function event_data()
    {
        # code...
        return $this->belongsTo(EventData::class, 'event_data_id');
    }

    public function equipment()
    {
        # code...
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }
}
