<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleSocialiteController extends Controller
{


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                if ($finduser->user_type == '1') {
                    return redirect()->intended('collegeDashboard');
                }
            } else {
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'user_type' => '1',
                //     'social_id' => $user->id,
                //     'social_type' => 'google',
                //     'password' => encrypt('123456dummy')
                // ]);
                // Auth::login($newUser);
                // return redirect()->intended('collegeDashboard');
                return redirect()->intended('login')->withErrors(["$user->email" . " Is not registered with us"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
