<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Retrieves all categories with extra information (Count Of Demi-Categories and societies).
     *
     * @return array The array of categories with those extra information.
     */
    static public function allWithExtraInformations()
    {

        $categories = Categorie::all();

        $data = [];

        foreach ($categories as $categorie) {

            $societieCount = 0;

            $societieCount += $categorie->societies->count();

            $categorie->setAttribute('societies_count', $societieCount);

            $data[] = $categorie;
        }

        return $data;
    }
}
