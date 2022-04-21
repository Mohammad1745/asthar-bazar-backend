<?php


namespace App\Http\Repositories;


use App\Models\User;

class UserRepository extends Repository
{
    /**
     * UserRepository constructor.
     */
    public function __construct ()
    {
        parent::__construct( new User());
    }
}
