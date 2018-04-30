<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:37
 */

namespace App\API\User\Action;

use App\API\User\Command\LoginUserCommand;
use App\API\User\Handler\LoginUserHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LoginUser
 * @package App\API\User\Action
 * @Route("/user/login",name="login_user", methods={"GET"})
 */
class LoginUser
{


    /**
     * @var LoginUserHandler $handler
     */
    private $handler;


    /**
     * LoginUser constructor.
     * @param LoginUserHandler $handler
     */
    public function __construct(LoginUserHandler $handler)
    {
        $this->handler = $handler;
    }


    public function __invoke(Request $request): Response
    {
        $command = LoginUserCommand::deserialize(
            [
                'username' => $request->query->get('username'),
                'password' => $request->query->get('password')
            ]
        );

        $response = $this->handler->handle($command);
//        var_dump($response);
//        die();
        if ($response){
            return new Response('Successful operation ',200);
        }

        return new Response("Invalid username/password ",400);
    }
}
