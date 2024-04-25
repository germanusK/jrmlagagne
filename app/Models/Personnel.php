<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Personnel extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'personnel';

    protected $fillable = ['name', 'email', 'tel', 'password', 'type', 'position', 'matric', 'photo'];

    protected $dates = ['created_at', 'updated_at'];
}
