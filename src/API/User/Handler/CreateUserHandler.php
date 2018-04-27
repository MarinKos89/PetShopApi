<?php

namespace App\API\User\Handler;

use App\API\User\Command\CreateUserCommand;
use App\API\User\Service\UserService;


/**
 * Class CreateUserHandler
 * @package App\API\User\Handler
 */
class CreateUserHandler
{


    /**
     * @var UserService $service
     */
    private $service;

    /**
     * CreateUserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function handle(CreateUserCommand $createUserCommand)
    {

        return $this->service->createUser($createUserCommand->toArray());
    }


}