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

    public static function getReviewsOfSociety($society_id)
    {
        $reviews = Review::where('societie_id', $society_id)->orderBy("id","desc")->paginate(3);
        return $reviews;
    }


    public static function UserSendedAReview()
    {
        $user = session()->get('user');

        $review = Review::where('sub_googleUser', $user['sub_googleUser'])->get();

        return $review ? true : false;
    }

}
