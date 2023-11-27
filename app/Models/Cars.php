<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'name',
        'price',
        'year',
        'color',
        'speed',
    ];
}
