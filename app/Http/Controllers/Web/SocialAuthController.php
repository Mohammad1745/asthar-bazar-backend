<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\SocialLoginRequest;
use App\Http\Services\Feature\Auth\AuthService;
use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialAuthController extends Controller
{
    /**
     * @var AuthService
     */
    private $service;

    /**
     * AuthController constructor.
     * @param AuthService $service
     */
    public function __construct (AuthService $service)
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
