<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_image',
        'hero_title',
        'hero_description',
        'logo',
        'bottom_description',
        'bottom_info'
    ];
} 