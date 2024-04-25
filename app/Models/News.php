<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    protected $fillable = ['expires_on', 'subject', 'details'];

    protected $dates = ['created_at', 'updated_at'];

}
