<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = "equipment";

    protected $fillable = ['name', 'description', 'use'];

    protected $dates = ['created_at', 'updated_at'];
    

    public function events()
    {
        # code...
        return $this->belongsToMany(Event::class, EquipmentDedicated::class);
    }
    

    public function event_data()
    {
        # code...
        return $this->belongsToMany(Event::class, EquipmentUsed::class);
    }

    public function equipment_dedicated()
    {
        # code...
        return $this->hasMany(EquipmentDedicated::class, 'equipment_id');
    }

    public function equipment_used()
    {
        # code...
        return $this->hasMany(EquipmentUsed::class, 'equipment_id');
    }
}
