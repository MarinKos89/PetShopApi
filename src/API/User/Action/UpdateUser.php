<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:42
 */

namespace App\API\User\Action;

use App\API\User\Command\UpdateUserCommand;
use App\API\User\Entity\User;
use App\API\User\Handler\UpdateUserHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UpdateUser
 * @package App\API\User\Action
 * @Route("/user/{username",name="update_user", methods={"PUT"})
 */
class UpdateUser
{


    /**
     * @var UpdateUserHandler $handler
     */
    private $handler;

    /**
     * UpdateUser constructor.
     * @param UpdateUserHandler $handler
     */
    public function __construct(UpdateUserHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param Request $request
     * @param string $username
     * @return Response
     */
    public function __invoke(Request $request, $username): Response
    {

        $command = UpdateUserCommand::deserialize(
            (array)json_decode($request->getContent(false))
        );

        return $this->handler->handle($command, $username);
    }
}