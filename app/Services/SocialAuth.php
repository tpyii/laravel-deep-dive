<?php

namespace App\Services;

use App\Models\User;
use App\Contracts\Social;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\User as SocialUser;

class SocialAuth implements Social
{
    /**
     * 
     * @param \Laravel\Socialite\Contracts\User $networkUser
     * @return \Illuminate\Http\Response
     */
    public function auth(SocialUser $newtworkUser)
    {
        $user = User::where('email', $newtworkUser->email)->first();

        if ($user) {

            $user->update([
                'name' => $newtworkUser->name,
                'email' => $newtworkUser->email,
                'avatar' => $newtworkUser->avatar,
            ]);
        } else {

            $user = User::create([
                'name' => $newtworkUser->name,
                'email' => $newtworkUser->email,
                'password' => Hash::make($newtworkUser->name . $newtworkUser->email),
                'avatar' => $newtworkUser->avatar,
            ]);
        }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
