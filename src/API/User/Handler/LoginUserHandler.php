<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 27.4.2018.
 * Time: 22:12
 */

namespace App\API\User\Handler;
use App\API\User\Command\LoginUserCommand;
use App\API\User\Service\UserService;

/**
 * Class LoginUserHandler
 * @package App\API\User\Handler
 */
class LoginUserHandler
{

    /**
     * @var UserService $service
     */
    private $service;

    /**
     * LoginUserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


    /**
     * @param LoginUserCommand $loginUserCommand
     * @return mixed
     */
    public function handle(LoginUserCommand $loginUserCommand){
        return $this->service->loginUser($loginUserCommand->toArray());
    }


}