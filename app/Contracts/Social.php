<?php

namespace App\Contracts;

use Laravel\Socialite\Contracts\User as SocialUser;

interface Social
{
    /**
     * 
     * @param \Laravel\Socialite\Contracts\User $networkUser
     * @return \Illuminate\Http\Response
     */
    public function auth(SocialUser $networkUser);
}
