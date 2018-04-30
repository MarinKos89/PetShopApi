<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 27.4.2018.
 * Time: 20:42
 */

namespace App\API\User\Handler;

use App\API\User\Service\UserService;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByUserNameGetUserHandler
 * @package App\API\User\Handler
 */
class ByUserNameGetUserHandler
{

    /**
     * @var UserService $service
     */
    private $service;

    /**
     * ByUserNameGetUserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


    /**
     * @param string $username
     * @return Response
     */
    public function handle($username)
    {

        return $this->service->selectUser($username);
    }


}