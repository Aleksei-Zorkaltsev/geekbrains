<?php

namespace App\Http\Controllers;

use App\Contract\Social;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function start($social){

        return Socialite::driver($social)->redirect();

        //return Socialite::driver('facebook')->redirect();
        //return Socialite::driver('vkontakte')->redirect();
    }

    public function callback(Social $service, $social)
    {
        try{
            return redirect($service->socialLogin(Socialite::driver($social)->user()));
        }
        catch (\Exception $e){
            \Log::error($e->getMessage());
        }
    }
}
