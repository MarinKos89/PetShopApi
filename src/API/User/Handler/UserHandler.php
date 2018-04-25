<?php

namespace App\API\User\Handler;

use App\API\User\Command\CreateUserCommand;
use App\API\User\Service\UserService;


/**
 * Class UserHandler
 * @package App\API\User\Handler
 */
class UserHandler
{


    /**
     * @var UserService $service
     */
    private $service;

    /**
     * UserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @return string
     */
    public function handle(){
        return $this->service->selectUsers();
    }

    /**
     * @param CreateUserCommand $userData
     * @return int
     */
    public function handleCreateUser(CreateUserCommand $userData){
        return $this->service
            ->createUser($userData->toArray());
    }
}