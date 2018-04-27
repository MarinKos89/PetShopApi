<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:39
 */

namespace App\API\User\Action;

use App\API\User\Handler\LogoutUserHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LogOutUser
 * @package App\API\User\Action
 * @Route("/user/logout",name="logout_user",methods={"GET"})
 */
class LogOutUser
{


    /**
     * @var LogoutUserHandler $handler
     */
    private $handler;

    /**
     * LogOutUser constructor.
     * @param LogoutUserHandler $handler
     */
    public function __construct(LogoutUserHandler $handler)
    {
        $this->handler = $handler;
    }



    public function __invoke():Response
    {
        $response=$this->handler->handle();

        if ($response){
            return new Response('Successful operation ', 200);
        }


       return new Response('Invalid username/password supplied',400);
    }
}