<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:44
 */

namespace App\API\User\Action;

use App\API\User\Command\DeleteUserCommand;
use App\API\User\Entity\User;
use App\API\User\Handler\DeleteUserHandler;
use App\API\User\Service\UserService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class DeleteUser
 * @package App\API\User\Action
 * @Route("/user/{username}",name="delete_user",methods={"DELETE"})
 */
class DeleteUser extends Controller
{


    /**
     * @var DeleteUserHandler $handler
     */
    private $handler;

    /**
     * DeleteUser constructor.
     * @param DeleteUserHandler $handler
     */
    public function __construct(DeleteUserHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param Request $request
     * @param User $username
     * @return Response
     */
    public function __invoke(Request $request,$username): Response
    {
        return $this->handler->handle($username);

    }

}