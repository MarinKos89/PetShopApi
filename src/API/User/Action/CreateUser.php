<?php

namespace App\API\User\Action;

use App\API\User\Command\CreateUserCommand;
use App\API\User\Handler\UserHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CreateUser
 * @package App\API\User\Action
 * @Route("/user", name="create_user", methods={"POST"})
 */
class CreateUser
{
    /**
     * @var UserHandler $handler
     */
    private $handler;

    /**
     * CreateUser constructor.
     * @param $handler
     */
    public function __construct(UserHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $command = CreateUserCommand::deserialize(
            (array) json_decode($request->getContent(false))
        );

        $success = $this->handler->handleCreateUser($command);
        if ($success)
        {
            return new Response('successful operation, user id added: ' .$success,
                200);//za uspjeh, znam da ti je nagdje to naveo
            //https://api.symfony.com/3.4/Symfony/Component/HttpFoundation/Response.html
            //ovdje možeš sve statuse pogledat ali u principu koristiš njih nekoliko
        }

        return new Response('',400);
    }
}