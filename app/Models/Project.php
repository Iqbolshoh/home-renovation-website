<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'title',
        'apartment_info',
        'client_solution',
        'text_1',
        'text_2',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class);
    }
}
