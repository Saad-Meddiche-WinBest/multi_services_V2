<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        $request->session()->put('user', [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'image' => $googleUser->avatar,
            'sub_googleUser' =>  $googleUser->id
        ]);

        $request->session()->get('user');

        return redirect()->back(); // Redirect to the homepage after login
    }
}
