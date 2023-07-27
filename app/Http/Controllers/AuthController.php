<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function loginWithGoogle()
    {
        // Stock the Link that the request came from
        $referer = $_SERVER['HTTP_REFERER'];
        Cache::forever('referer', $referer);

        return Socialite::driver('google')->redirect();
    }

    public function loginCallback(Request $request)
    {
        /* Get that stock stocked link , so after choosing an account connetcing with ,
        it will redirect you to the page you came from */
        if (Cache::has('referer')) {
            $referer = Cache::get('referer');
            Cache::forget('referer');
        }

        $googleUser = Socialite::driver('google')->user();

        $request->session()->put('user', [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'image' => $googleUser->avatar,
            'sub_googleUser' =>  $googleUser->id
        ]);

        return redirect($referer);
    }
}
