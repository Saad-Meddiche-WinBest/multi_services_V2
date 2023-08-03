<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index(){
        return view('inscription.index');
    }
    public function contact(){
        $categorie = Categorie::findOrFail($_GET['categorie']);
        return view('inscription.contact',['categorie'=>$categorie]);
    } 
}
