<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

        $numberOfReviews = $reviews->count();

        $sumOfServiceRating = 0;
        $sumOfPriceRating = 0;
        $sumOfQualityRating = 0;
        $sumOfLocationRating = 0;

        foreach ($reviews as $review) {
            $sumOfServiceRating += $review->service_rating;
            $sumOfPriceRating += $review->price_rating;
            $sumOfQualityRating += $review->quality_rating;
            $sumOfLocationRating += $review->location_rating;
        }

        $moyenOfServiceRating = $sumOfServiceRating / $numberOfReviews;
        $moyenOfPriceRating = $sumOfPriceRating / $numberOfReviews;
        $moyenOfQualityRating = $sumOfQualityRating / $numberOfReviews;
        $moyenOfLocationRating = $sumOfLocationRating / $numberOfReviews;

        $moyenOfSocietyRating = array_sum([$moyenOfServiceRating, $moyenOfPriceRating, $moyenOfQualityRating, $moyenOfLocationRating]) / 4;

        return [
            'moyenOfServiceRating' => $moyenOfServiceRating,
            'moyenOfPriceRating' => $moyenOfPriceRating,
            'moyenOfQualityRating' => $moyenOfQualityRating,
            'moyenOfLocationRating' => $moyenOfLocationRating,
            'moyenOfSocietyRating' => $moyenOfSocietyRating,
        ];
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
