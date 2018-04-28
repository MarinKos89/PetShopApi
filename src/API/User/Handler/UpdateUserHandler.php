<?php


namespace App\API\User\Handler;


use App\API\User\Command\UpdateUserCommand;
use App\API\User\Service\UserService;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserHandler
{

    /**
     * @var UserService $service
     */
    private $service;

    /**
     * UpdateUserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


    /**
     * @param UpdateUserCommand $updateUserCommand
     * @param string $username
     * @return Response
     */
    public function handle(UpdateUserCommand $updateUserCommand,$username){

        return $this->service->updateUser($updateUserCommand->toArray(), $username);
    }


}