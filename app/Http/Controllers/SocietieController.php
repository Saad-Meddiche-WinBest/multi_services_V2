<?php

namespace App\Http\Controllers;

use App\Mail\emailMailable;
use App\Models\Categorie;
use App\Models\Citie;
use App\Models\Premium;
use App\Models\Review;
use App\Models\Societie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SocietieController extends Controller
{
    public function index(Request $request)
    {

        $societies = Societie::with(['tags', 'cities', 'Categorie', 'services'])->get();

        return response()->json(['societies' => $societies]);
    }

    public function sendMail(Request $request, Societie $societie){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
        //checking connection with internet
        if($this->isOnline()){
            $mail_data = [
                'recepient'=>'ijalali396@gmail.com  ',
                'fromEmail'=>$request->email,
                'fromNom'=>$request->name,
                'body'=>$request->message
            ];
            Mail::send("mail.email-template",$mail_data,function($message) use($mail_data)
            {   
                $message->to($mail_data['recepient'])
                ->from($mail_data['fromEmail'],$mail_data['fromNom']);
            });
            return redirect()->back()->withInput()->with('success','Message sent');;
        }else{
            return redirect()->back()->with('error','Message Error');
        }   
        return "mail succeed";
    }

    public function isOnline($site ="https://youtube.com/")
    {
        if(@fopen($site,'r'))
        {
            return 'true';
        }
        else{
            return 'false';
        }
    }

    public function show(Societie $societie)
    {
        // session()->forget('user');

        $societie->load('tags', 'cities', 'Categorie', 'services');

        $reviews = Review::getReviewsOfSociety($societie->id);

        if ($user = session()->get('user'))
            $reviewOfLoggedUser = Review::where('sub_googleUser', $user['sub_googleUser'])->where('societie_id', $societie->id)->first();
        else
            $reviewOfLoggedUser = false;

        return view('societies.show', compact('societie', 'reviews', 'reviewOfLoggedUser'));
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
