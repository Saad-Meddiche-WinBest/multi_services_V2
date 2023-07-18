<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Societie;
use Illuminate\Http\Request;

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
        $topCities = CitieController::topCitiesBySocieties(6);

        $categories = CategorieController::allWithExtraInformations();

        $societies = SocietieController::fetchNewSocities(3);

        return view('home', compact('topCities', 'categories', 'societies'));
    }
}
