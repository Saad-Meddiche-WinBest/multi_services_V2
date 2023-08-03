<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view("about.index");
    }
    public function contact($id){
        $plan = Categorie::findOrFail($id);
        return view('inscription.contact',['plan'=>$plan]);
    } 
}
