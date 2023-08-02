<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mockery\Undefined;

class Societie extends Model
{
    use CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'societies';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function getRatingOfSocitie($societie_id)
    {
        $reviews = Review::where('societie_id', $societie_id)->get();

        $numberOfReviews = $reviews->count() != 0 ? $reviews->count() : 1;

        $sumOfRatings = ['service_rating' => 0, 'price_rating' => 0, 'quality_rating' => 0, 'location_rating' => 0];

        foreach ($reviews as $review) {
            foreach ($sumOfRatings as $key => $value) {
                $sumOfRatings[$key] += $review->{$key};
            }
        }

        $moyenOfRatings = array_map(function ($sum) use ($numberOfReviews) {
            return $sum / $numberOfReviews;
        }, $sumOfRatings);

        $ratingOfSocietie = array_sum($moyenOfRatings) / 4;

        return array_merge($moyenOfRatings, ['ratingOfSocietie' => $ratingOfSocietie]);
    }

    static public function fetchNewSocities($limit)
    {
        $societies = Societie::orderby('id', 'desc')->limit($limit)->get();
        return $societies;
    }

    static public function fetchPremiumSocieties($limit = null)
    {
        $idsSocieties = Premium::all()->pluck('societie_id');
        $premiumSocieties = Societie::whereIn('id', $idsSocieties)->limit($limit)->get();
        return $premiumSocieties;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'societie_has_services');
    }

    public function cities()
    {
        return $this->belongsToMany(Citie::class, 'citie_has_societies');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'societie_has_tags');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function premiums()
    {
        return $this->hasMany(Premium::class);
    }



    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
