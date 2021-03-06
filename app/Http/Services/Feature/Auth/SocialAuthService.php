<?php

namespace App\Http\Services\Feature\Auth;

use App\Http\Services\Base\UserService;
use App\Http\Services\ResponseService;
use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialAuthService extends ResponseService
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * AuthService constructor.
     * @param UserService $userService
     */
    public function __construct (UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param string $provider
     * @return RedirectResponseAlias|RedirectResponse
     */
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param string $provider
     * @return string
     */
    public function callback(string $provider): string
    {
        try {
            $socialUser = Socialite::driver( $provider)->stateless()->user();
            $user = $this->userService->firstWhere(['email' => $socialUser->email]);
            $user
                ? $this->userService->update( $user->id, $this->userService->formatUserDataForSocialLogin($socialUser->avatar, $provider))
                : $user = $this->userService->create( $this->userService->formatUserDataForSocialSignup($socialUser->user, $provider));
            $authorization = $this->_authorize( $user);

            return CLIENT_URL.'/redirect?authorization=' . (json_encode( $authorization));
        } catch (\Exception $exception) {

            return CLIENT_URL.'/redirect';
        }
    }

    /**
     * @param object $user
     * @return array
     */
    private function _authorize (object $user): array
    {
        return [
            'token' =>  $user->createToken('Asthar Bazar')->accessToken,
            'token_type' =>  'bearer',
            'user' => [
                'name' => $user->name,
                'avatar' => $user->avatar,
            ]
        ];
    }
}
