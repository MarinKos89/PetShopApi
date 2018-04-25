<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:40
 */

namespace App\API\User\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByUserNameGetUser
 * @package App\API\User\Action
 * @Route("/user/{username}",name="get_user",methods={"GET"})
 */
class ByUserNameGetUser
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new JsonResponse("Get user by user name");
    }

}