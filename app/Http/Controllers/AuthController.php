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

        $data['name'] = $googleUser->name;
        $data['email'] = $googleUser->email;
        $data['image'] = $googleUser->avatar;
        $data['sub_googleUser'] = $googleUser->id;

        $request->session()->put('user', [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'image' => $googleUser->avatar,
            'sub_googleUser' =>  $googleUser->id
        ]);

        $user = $request->session()->get('user');

        return redirect('/'); // Redirect to the homepage after login
    }
}
