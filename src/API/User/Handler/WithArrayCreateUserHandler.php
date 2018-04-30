<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 27.4.2018.
 * Time: 20:52
 */

namespace App\API\User\Handler;
use App\API\User\Service\UserService;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class WithArrayCreateUserHandler
 * @package App\API\User\Handler
 */
class WithArrayCreateUserHandler
{


    /**
     * @var UserService $service
     */
    private $service;

    /**
     * WithArrayCreateUserHandler constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


    /**
     * @param array $command
     * @return Response
     */
    public function handle(array $command){

        return $this->service->withArrayCreateUser($command);
    }

}