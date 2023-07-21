<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'content',
        'societie_id',
        'service_rating',
        'price_rating',
        'quality_rating',
        'location_rating',
    ];
}
