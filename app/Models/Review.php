<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Review extends Model
{
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $fillable = [
        'name',
        'email',
        'content',
        'societie_id',
        'service_rating',
        'price_rating',
        'quality_rating',
        'location_rating',
        'image',
        'sub_googleUser',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function GetReviewOFUserInThisSocieite($userSub, $societieId)
    {
        $review = Review::where('sub_googleUser', $userSub)->where('societie_id', $societieId)->first();

        return $review ?? null;
    }
}
