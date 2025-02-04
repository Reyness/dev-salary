<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = [
        'user_id',
        'years_experience',
        'salary',
        'region',
    ];
}