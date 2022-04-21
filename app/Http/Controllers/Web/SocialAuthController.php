<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\SocialLoginRequest;
use App\Http\Services\Feature\Auth\SocialAuthService;
use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialAuthController extends Controller
{
    /**
     * @var SocialAuthService
     */
    private $service;

    /**
     * AuthController constructor.
     * @param SocialAuthService $service
     */
    public function __construct (SocialAuthService $service)
    {
        $this->service = $service;
    }

    /**
     * @param SocialLoginRequest $request
     * @return RedirectResponseAlias|RedirectResponse
     */
    public function redirect(SocialLoginRequest $request)
    {
        return $this->service->redirect( $request->query('provider'));
    }

    /**
     * @param SocialLoginRequest $request
     * @return RedirectResponseAlias
     */
    public function callback(SocialLoginRequest $request): RedirectResponseAlias
    {
        return redirect()->away( $this->service->callback( $request->query('provider')));
    }
}
