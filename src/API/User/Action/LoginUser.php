<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:37
 */

namespace App\API\User\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class LoginUser
 * @package App\API\User\Action
 * @Route("/user/login",name="login_user", methods={"GET"})
 */
class LoginUser
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new JsonResponse("logs user into the system");
    }

}