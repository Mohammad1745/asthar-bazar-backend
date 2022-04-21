<?php

namespace App\Http\Requests\Web\Auth;


use App\Http\Requests\Request;

class SocialLoginRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules ():array
    {
        return [
            'provider' => 'required|in:'.implode(',',[PROVIDER_GOOGLE,PROVIDER_LINKEDIN,PROVIDER_GITHUB]),
        ];
    }
}
