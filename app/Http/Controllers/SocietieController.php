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

        $societies = Societie::with(['tags', 'cities', 'demiCategorie', 'services'])->get();

        return response()->json(['societies' => $societies]);
    }

    public function show(Societie $societie)
    {

        $societie->load('tags', 'cities', 'demiCategorie', 'services');
        $reviews = Review::getReviewsOfSociety($societie->id);
        return view('societies.show', compact('societie', 'reviews'));
    }

    public function fetchSocietiesByCitie(Citie $citie)
    {
        $societies = $citie->societies;

        $societies->load('tags', 'cities', 'demiCategorie', 'services');

        return response()->json(['societies' => $societies]);
    }

    public function fetchSocietiesByCategorie(Categorie $categorie)
    {
        $societies = $categorie->demiCategories->flatMap(function ($demiCategorie) {
            return $demiCategorie->societies->load('tags', 'cities', 'demiCategorie', 'services');
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
