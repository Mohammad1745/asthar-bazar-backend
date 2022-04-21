<?php


namespace App\Http\Services\Base;


use App\Http\Repositories\UserRepository;
use App\Http\Services\Service;
use Illuminate\Support\Facades\Hash;

class UserService extends Service
{
    /**
     * UserService constructor.
     * @param UserRepository $repository
     */
    public function __construct (UserRepository $repository)
    {
        parent::__construct( $repository);
    }

    /**
     * @param array $data
     * @param string $provider
     * @return array
     */
    public function formatUserDataForSocialSignup (array $data, string $provider): array
    {
        if ($data){
            return [
                'name' => $data['name'],
                'email' => $data['email'],
                'avatar' => $data['picture'],
                'provider' => $provider,
                'provider_id' => $data['id'],
//                'role' => $data['role'] ? $data['role'] : USER_ROLE,
//                'status' => USER_PENDING_STATUS,
            ];
        }
        return [];
    }

    /**
     * @param string $avatar
     * @param string $provider
     * @return array
     */
    public function formatUserDataForSocialLogin (string $avatar, string $provider): array
    {
        if ($avatar){
            return [
                'avatar' => $avatar,
                'provider' => $provider,
            ];
        }
        return [];
    }

    /**
     * @param int $userId
     * @param string $password
     * @return mixed
     */
    public function resetPassword (int $userId, string $password)
    {
        return $this->updateWhere(['id' => $userId], ['password' => Hash::make($password)]);
    }
}
