<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class FacebookSocialiteController extends Controller
{
    public function redirectToFB()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect('/collegeDashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'facebook',
                    'user_type' => '1',
                    'password' => encrypt('my-facebook')
                ]);

                Auth::login($newUser);

                return redirect('/collegeDashboard');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
