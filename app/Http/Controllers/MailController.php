<?php

namespace App\Http\Controllers;

use App\Models\Societie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class   MailController extends Controller
{
    public function sendMail(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'plan',
            'categorie',
            'subject',
            'tel',
            'message' => 'required'
        ]);


        if (Cache::has('planSelectionner')) {
            $plan = Cache::get('planSelectionner');
            Cache::forget('planSelectionner');
        }



        
        if(Cache::has('categorySelectionner')) {
            $categorie = Cache::get('categorySelectionner');
        } 

        Cache::forget('categorySelectionner');
        

        //Checking if there is no connection
        if (!$this->isOnline()) return redirect()->back()->with('error', 'Message Error');

        $mail_data = [
            'recepient' => Cache::get('emailOfReception'),
            'fromEmail' => $request->email,
            'fromNom' => $request->name,
            'body' => $request->message,
            'tel' => $request->tel,
            'categorie'=> $categorie->name ?? null,
            'subject' => $request->subject
        ];

        /* We couldn't found the reason of why the plan is keeping registred in the cache even that we delete it from it*/
        if (Cache::get('emailOfReception') == env('MAIL_ADMIN_RECEIVER') && isset($plan)) {
            $mail_data['plan'] = $plan->name;
        } else {
            $mail_data['plan'] = null;
        }


        Mail::send("mail.email-template", $mail_data, function ($message) use ($mail_data) {

            $message->to($mail_data['recepient'])
              ->from($mail_data['fromEmail'],$mail_data['fromNom'],$mail_data['tel'],$mail_data['plan'],$mail_data['categorie']);


            if ($mail_data["subject"])  $message->subject($mail_data["subject"]);
        });
        return redirect()->back()->with('success', 'Message sent');
    }

    public function isOnline($site = "https://youtube.com/")
    {
        return @fopen($site, 'r') ? true : false;
    }
}
