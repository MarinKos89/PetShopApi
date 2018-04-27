<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 27.4.2018.
 * Time: 22:25
 */

namespace App\API\User\Handler;
use App\API\User\Service\UserService;

/**
 * Class LogoutUserHandler
 * @package App\API\User\Handler
 */
class LogoutUserHandler
{
    /**
     * @var UserService $service
     */
    private $service;

    /**
     * LogoutUserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @return bool
     */
    public function handle(){

        return $this->service->logoutUser();
    }


}