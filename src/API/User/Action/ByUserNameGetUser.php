<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:40
 */

namespace App\API\User\Action;

use App\API\User\Handler\ByUserNameGetUserHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByUserNameGetUser
 * @package App\API\User\Action
 * @Route("/user/{username}",name="get_user",methods={"GET"})
 */
class ByUserNameGetUser
{

    /**
     * @var ByUserNameGetUserHandler $handler
     */
    private $handler;

    /**
     * ByUserNameGetUser constructor.
     * @param ByUserNameGetUserHandler $handler
     */
    public function __construct(ByUserNameGetUserHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param string $username
     * @return Response
     */
    public function __invoke($username): Response
    {
        return $this->handler->handle($username);
    }

}