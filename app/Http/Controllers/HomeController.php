<?php

namespace App\Http\Controllers;

use App\Models\Citie;
use App\Models\Societie;
use App\Models\Categorie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $topCities = Citie::topCitiesBySocieties(6);

        $categories = Categorie::allWithExtraInformations();

        $newsocieties = Societie::fetchNewSocities(9);

        $premiumSocieties = Societie::fetchPremiumSocieties();
        
        return view('home', compact('topCities', 'categories', 'newsocieties', 'premiumSocieties'));
    }
}
