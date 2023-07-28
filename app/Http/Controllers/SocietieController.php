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
        $rating = Societie::moyenOfSocietyRatingmoyenOfSocietyRatingmoyenOfSocietyRating($societie->id);

        $societie->load('tags', 'cities', 'Categorie', 'services');

        $reviews = Review::getReviewsOfSociety($societie->id);

        if ($user = session()->get('user'))
            $reviewOfLoggedUser = Review::where('sub_googleUser', $user['sub_googleUser'])->where('societie_id', $societie->id)->first();
        else
            $reviewOfLoggedUser = false;

        return view('societies.show', compact('societie', 'reviews', 'reviewOfLoggedUser', 'rating'));
    }

    public function fetchSocietiesByCitie(Citie $citie)
    {
        $societies = $citie->societies;

        $societies->load('tags', 'cities', 'Categorie', 'services');

        return response()->json(['societies' => $societies]);
    }

    public function fetchSocietiesByCategorie(Categorie $categorie)
    {
        $societies = $categorie->Categories->flatMap(function ($Categorie) {
            return $Categorie->societies->load('tags', 'cities', 'Categorie', 'services');
        });

        return response()->json(['societies' => $societies]);
    }

    static public function fetchNewSocities($limit)
    {
        $societies = Societie::orderby('id', 'desc')->limit($limit)->get();
        return $societies;
    }

    static public function fetchPremiumSocieties()
    {
        $idsSocieties = Premium::all()->pluck('societie_id');
        $premiumSocieties = Societie::whereIn('id', $idsSocieties)->get();

        return $premiumSocieties;
    }
}
