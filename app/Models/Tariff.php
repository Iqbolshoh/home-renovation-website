<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'price',
        'description',
    ];
}
