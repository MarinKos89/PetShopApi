<?php


namespace App\API\User\Action;

use App\API\User\Command\CreateUserCommand;
use App\API\User\Command\WithArrayCreateUserCommand;
use App\API\User\Handler\CreateUserHandler;
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
     * @var WithArrayCreateUserHandler $handler
     */
    private $handler;

    /**
     * WithArrayCreateUser constructor.
     * @param WithArrayCreateUserHandler $handler
     */
    public function __construct(WithArrayCreateUserHandler $handler)
    {
        $this->handler = $handler;
    }





    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {

        $command = WithArrayCreateUserCommand::deserialize(
            (array) json_decode($request->getContent(false))
        );

        $success = $this->handler->handle($command);
        if ($success)
        {
            return $success;
        }

        return new Response('Invalid input ',405);
    }
}