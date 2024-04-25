<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $table = "cases";

    protected $fillable = ['project_id', 'client_id', 'date', 'details', 'first_aid', 'treatment', 'referral'];

    protected $dates = ['created_at', 'updated_at', 'date'];

}
