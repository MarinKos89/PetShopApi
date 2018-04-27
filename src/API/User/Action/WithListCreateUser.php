<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:32
 */

namespace App\API\User\Action;

use App\API\User\Command\CreateUserCommand;
use App\API\User\Handler\CreateUserHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class WithListCreateUser
 * @package App\API\User\Action
 * @Route("/user/createWithList",name="with_list_create_user",methods={"POST"})
 */
class WithListCreateUser
{
    /**
     * @var CreateUserHandler $handler
     */
    private $handler;

    /**
     * WithListCreateUser constructor.
     * @param CreateUserHandler $handler
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

        $success = $this->handler->handleCreateUser($command);
        if ($success)
        {
            return new Response('successful operation, user id added: ' .$success,
                200);
        }

        return new Response('',400);
    }
}