<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialtySample extends Model
{
    use HasFactory;

    protected $table = "specialty_samples";

    protected $fillable = ['specialty_id', 'image_path', 'subject', 'details'];

    protected $dates = ['created_at', 'updated_at'];


    public function specialty()
    {
        # code...
        return $this->belongsTo(Specialty::class, 'specialty_id');
    }
}
