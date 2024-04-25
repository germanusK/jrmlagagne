<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = ['center_id', 'name', 'email', 'tel', 'whatsapp', 'facebook', 'instagram', 'telegram'];

    protected $dates = ['created_at', 'updated_at'];


    public function center()
    {
        # code...
        return $this->belongsTo(Center::class);
    }
}
