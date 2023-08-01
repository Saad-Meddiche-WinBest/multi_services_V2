<?php

namespace App\Http\Controllers;

use App\Models\Societie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject',
            'tel',
            'message'=>'required'
        ]);
        $mails = Cache::get('emailOfReception');
        //checking connection with internet
        if($this->isOnline()){
            $mail_data = [
                'recepient'=>$mails,
                'fromEmail'=>$request->email,
                'fromNom'=>$request->name,
                'body'=>$request->message,
                'tel'=>$request->tel,
                'subject'=>$request->subject
            ];
            Mail::send("mail.email-template",$mail_data,function($message) use($mail_data)
            {   
                if($mail_data["subject"] ||$mail_data["tel"]){
                    $message->to($mail_data['recepient'])
                    ->from($mail_data['fromEmail'],$mail_data['fromNom'],$mail_data['tel'])
                    ->subject($mail_data["subject"]);
                }else{
                    $message->to($mail_data['recepient'])
                    ->from($mail_data['fromEmail'],$mail_data['fromNom']);
                }
            });
            return redirect()->back();
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
