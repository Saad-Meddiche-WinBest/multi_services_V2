<?php

namespace App\Http\Controllers;

use App\Models\Societie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class   MailController extends Controller
{
    public function sendMail(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'plan',
            'categorie',
            'subject',
            'tel',
            'message'=>'required'
        ]);

        if(Cache::has('planSelectionner')) {
            $plan = Cache::get('planSelectionner');
        } 

        Cache::forget('planSelectionner');
        
        if(Cache::has('categorySelectionner')) {
            $categorie = Cache::get('categorySelectionner');
        } 

        Cache::forget('categorySelectionner');
        
        //Checking if there is no connection
        if(!$this->isOnline()) return redirect()->back()->with('error','Message Error');

        $mail_data = [
            'recepient'=>Cache::get('emailOfReception'),
            'fromEmail'=>$request->email,
            'fromNom'=>$request->name,
            'plan'=> $plan->name ?? null,
            'categorie'=> $categorie->name ?? null,
            'body'=>$request->message,
            'tel'=>$request->tel,
            'subject'=>$request->subject
        ];

        Mail::send("mail.email-template",$mail_data,function($message) use($mail_data)
        {   
            
            $message->to($mail_data['recepient'])
            ->from($mail_data['fromEmail'],$mail_data['fromNom'],$mail_data['tel'],$mail_data['plan'],$mail_data['categorie']);

            if($mail_data["subject"] )  $message->subject($mail_data["subject"]);
            
        });
        return redirect()->back()->with('success','Message sent');
      
    }

    public function isOnline($site ="https://youtube.com/")
    {
        return @fopen($site,'r') ? true : false;
    }
}
