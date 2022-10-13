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
        'slug',
        'star5',
        'star4',
        'star3',
        'star2',
        'star1',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
