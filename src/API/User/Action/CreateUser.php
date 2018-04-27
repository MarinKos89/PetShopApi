<?php

namespace App\API\User\Action;

use App\API\User\Command\CreateUserCommand;
use App\API\User\Handler\CreateUserHandler;
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
     * @var CreateUserHandler $handler
     */
    private $handler;

    /**
     * CreateUser constructor.
     * @param $handler
     */
    public function __construct(CreateUserHandler $handler)
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

        $success = $this->handler->handle($command);
        if ($success)
        {
            return $success;
        }

        return new Response('invalid input ',405);
    }
}