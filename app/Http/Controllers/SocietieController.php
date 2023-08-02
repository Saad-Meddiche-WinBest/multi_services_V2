<?php

namespace App\Http\Controllers;

use App\Models\Citie;
use App\Models\Review;
use App\Models\Premium;
use App\Models\Societie;
use App\Models\Categorie;
use App\Mail\emailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SocietieController extends Controller
{
    public function index()
    {

        /* Yean I know , me too i don't like this part of code ,
        i really didn't know how to fix the problem,
        so when the premiums table is empty,
        the id of all societies is null,
        but when there is at least one row in premiums table,
        the problem is fixed
        */
        // if (Premium::count() === 0) {
        //     $societies = Societie::with(['tags', 'cities', 'categorie', 'services'])
        //         ->get();
        // } else {
            $societies = Societie::with(['tags', 'cities', 'categorie', 'services'])
                ->leftJoin('premiums', 'societies.id', '=', 'premiums.societie_id')
                ->where(function ($query) {
                    $query->whereNull('premiums.expire_at')
                        ->orWhere('premiums.expire_at', '>=', DB::raw('CURDATE()'));
                })
                ->orderBy('premiums.id', 'DESC')
                ->get();
        // }


        foreach ($societies as $societie) {
            $societie->rating = Societie::getRatingOfSocitie($societie->id);
        }

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

        foreach ($societies as $societie) {
            $societie->rating = Societie::getRatingOfSocitie($societie->id);
        }

        return response()->json(['societies' => $societies]);
    }

    public static function fetchSocietiesByCategorie(Categorie $categorie)
    {
        $societies = $categorie->societies->load('tags', 'cities', 'Categorie', 'services');

        foreach ($societies as $societie) {
            $societie->rating = Societie::getRatingOfSocitie($societie->id);
        }

        return response()->json(['societies' => $societies]);
    }

    public function getPremiumSocieties()
    {
        $societies = Societie::fetchPremiumSocieties();
        $societies->load('tags', 'cities', 'Categorie', 'services');

        foreach ($societies as $societie) {
            $societie->rating = Societie::getRatingOfSocitie($societie->id);
        }

        return response()->json(['societies' => $societies]);
    }
}
