<?php


namespace App\Services;

use App\Contract\Social;
use App\Events\UserEvent;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\User;
use \App\Models\User as UserModel;

class SocialService implements Social
{
    public function socialLogin(User $user){

        $checkUser = UserModel::where('email', $user->getEmail())->first();

        if($checkUser){

            $checkUser->name = $name = $user->getName();
            $checkUser->avatar = $user->getAvatar();

            if($checkUser->save()){

                \Auth::loginUsingId($checkUser->id);
                event(new UserEvent($checkUser));

                return route('account');
            }

        } else {
            $newUser = UserModel::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
                'password' => 'unset'
            ]);

            \Auth::loginUsingId($newUser->id);

            return route('account');
        }
        throw new \Exception('error social login');
    }
}
