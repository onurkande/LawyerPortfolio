<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'subtitle',
        'image'
    ];
} 