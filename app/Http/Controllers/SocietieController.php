<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Citie;
use App\Models\Societie;
use Illuminate\Http\Request;

class SocietieController extends Controller
{
    public function index(Request $request)
    {

        $societies = Societie::with(['tags', 'cities', 'demiCategorie'])->get();

        return response()->json(['societies' => $societies]);
    }


    public function show(Societie $societie)
    {
        $societie->load('tags', 'cities', 'demiCategorie');

        return response()->json(['societie' => $societie]);
    }

    public function fetchSocietiesByCitie(Citie $citie)
    {
        $societies = $citie->societies;

        $societies->load('tags', 'cities', 'demiCategorie');

        return response()->json(['societies' => $societies]);
    }

    public function fetchSocietiesByCategorie(Categorie $categorie)
    {
        $societies = $categorie->demiCategories->flatMap(function ($demiCategorie) {
            return $demiCategorie->societies->load('tags', 'cities', 'demiCategorie');
        });

        return response()->json(['societies' => $societies]);
    }
}
