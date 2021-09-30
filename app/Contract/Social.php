<?php


namespace App\Contract;


use Laravel\Socialite\Contracts\User;

interface Social
{
    /**
     * @param User $user
     * @return string
     */
    public function socialLogin(User $user);
}
