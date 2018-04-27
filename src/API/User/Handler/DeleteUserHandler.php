<?php


namespace App\API\User\Handler;


use App\API\User\Command\DeleteUserCommand;
use App\API\User\Entity\User;
use App\API\User\Service\UserService;

class DeleteUserHandler
{

    /**
     * @var UserService $service
     */
    private $service;

    /**
     * DeleteUserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @param User $username
     * @return mixed
     */
    public function handle($username)
    {
        return $this->service->deleteUser($username);
    }


}












