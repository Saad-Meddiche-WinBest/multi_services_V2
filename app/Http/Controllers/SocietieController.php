<?php

namespace App\Http\Controllers;

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

    public function test($column, $data)
    {
    }
}
