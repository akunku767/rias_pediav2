<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrape extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'rating',
        'review',
        'address',
        'open',
        'web',
        'phone',
        'image',
        'iframeMap',
        'slug'
    ];
}
