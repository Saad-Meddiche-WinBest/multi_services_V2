<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Citie;
use App\Models\Premium;
use App\Models\Review;
use App\Models\Societie;
use Illuminate\Http\Request;

class SocietieController extends Controller
{
    public function index(Request $request)
    {
        $societies = Societie::with(['tags', 'cities', 'Categorie', 'services'])->get();

        return response()->json(['societies' => $societies]);
    }

    public function show(Societie $societie)
    {
        // session()->forget('user');
        $rating = Societie::getRatingOfSocitie($societie->id);

        $reviews = $societie->load('tags', 'cities', 'Categorie', 'services', 'schedules')->reviews()->paginate(3);

        // Get the review of user if he is signed in with google account
        $user = session('user') ?? null;

        $reviewOfLoggedUser = $user ? Review::GetReviewOFUserInThisSocieite($user['sub_googleUser'], $societie->id) : null;

        return view('societies.show', compact('societie', 'reviews', 'reviewOfLoggedUser', 'rating'));
    }

    public function fetchSocietiesByCitie(Citie $citie)
    {
        $societies = $citie->societies->load('tags', 'cities', 'Categorie', 'services');

        return response()->json(['societies' => $societies]);
    }

    public function fetchSocietiesByCategorie(Categorie $categorie)
    {
        $societies = $categorie->societies->load('tags', 'cities', 'Categorie', 'services');

        return response()->json(['societies' => $societies]);
    }
}
