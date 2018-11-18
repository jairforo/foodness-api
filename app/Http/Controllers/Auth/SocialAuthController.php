<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Services\Contracts\UserServiceInterface;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\Response;

class SocialAuthController extends Controller
{
    /** @var UserServiceInterface */
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }

    public function handleProviderCallback()
    {
        $providerUser = Socialite::driver("facebook")->stateless()->user();
        $user = User::query()->firstOrNew(['email' => $providerUser->getEmail()]);

        $token = $user->createToken('SocialToken')->accessToken;

        return response()->json(['access_token' => $token], Response::HTTP_OK);
    }
}