<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";

    protected $fillable = ['name', 'email', 'phone', 'type'];

    protected $dates = ['created_at', 'updated_at'];


    public function cases()
    {
        # code...
        return $this->hasMany(Cases::class, 'client_id');
    }

    public function projects()
    {
        # code...
        return $this->hasMany(Project::class, Cases::class);
    }
}
