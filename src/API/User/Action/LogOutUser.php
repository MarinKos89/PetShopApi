<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:39
 */

namespace App\API\User\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class LogOutUser
 * @package App\API\User\Action
 * @Route("/user/logout",name="logout_user",methods={"GET"})
 */
class LogOutUser
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new JsonResponse("Logs out current logged in user session");
    }
}