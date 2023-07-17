<?php

namespace App\Http\Controllers;

use App\Models\Citie;
use Illuminate\Http\Request;

class CitieController extends Controller
{
    /**
     * Retrieves the top cities by the number of societies.
     *
     * @param int $limit The maximum number of cities to retrieve.
     * @return \Illuminate\Database\Eloquent\Collection The collection of top cities with the count of societies.
     */
    static public function topCitiesBySocieties($limit)
    {
        $topCities = Citie::withCount('societies')
            ->orderBy('societies_count', 'desc')
            ->limit($limit)
            ->get();

        return $topCities;
    }
}
