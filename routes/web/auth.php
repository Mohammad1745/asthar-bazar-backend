<?php

use App\Http\Controllers\Web\SocialAuthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function(){
    Route::get('auth/redirect', [SocialAuthController::class, 'redirect']);

    Route::get('auth/callback', [SocialAuthController::class, 'callback']);
});
