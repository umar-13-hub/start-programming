<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'name',
        'model',
        'price',
        'image'
    ];
}
