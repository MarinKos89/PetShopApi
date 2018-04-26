<?php


namespace App\API\User\Action;

use App\API\User\Command\CreateUserCommand;
use App\API\User\Command\WithArrayCreateUserCommand;
use App\API\User\Handler\UserHandler;
use App\API\User\Handler\WithArrayCreateUserHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class WithArrayCreateUser
 * @package App\API\User\Action
 * @Route("/user/createWithArray",name="with_array_create_user",methods={"POST"})
 */
class WithArrayCreateUser
{

    /**
     * @var UserHandler $handler
     */
    private $handler;

    /**
     * WithArrayCreateUser constructor.
     * @param UserHandler $handler
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
                200);
        }

        return new Response('',400);
    }
}