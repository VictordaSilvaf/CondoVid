<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $userProvider = Socialite::driver($provider)->user();

        $user = User::firstOrCreate(
            ['email' => $userProvider->getEmail()],
            ['name' => $userProvider->getName() ?? $provider->getNickname(),
            'password' => "{$provider}Pass"]

        );

        Auth::login($user);

        return redirect(route('dashboard'));

        // $user->token;
    }
}
