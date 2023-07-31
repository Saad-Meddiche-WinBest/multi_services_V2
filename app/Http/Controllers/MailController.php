<?php

namespace App\Http\Controllers;

use App\Models\Societie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    public function sendMail(Request $request,Societie $societie){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
        
        //checking connection with internet
        if($this->isOnline()){
            $mail_data = [
                'recepient'=>$societie->email,
                'fromEmail'=>$request->email,
                'fromNom'=>$request->name,
                'body'=>$request->message
            ];
            Mail::send("mail.email-template",$mail_data,function($message) use($mail_data)
            {   
                $message->to($mail_data['recepient'])
                ->from($mail_data['fromEmail'],$mail_data['fromNom']);
            });
            return Redirect::route('societie.show', ['societie' => $societie->id]);
        }else{
            return redirect()->back()->with('error','Message Error');
        }   
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
}
