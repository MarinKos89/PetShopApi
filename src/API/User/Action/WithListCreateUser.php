<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:32
 */

namespace App\API\User\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class WithListCreateUser
 * @package App\API\User\Action
 * @Route("/user/createWithList",name="with_list_create_user",methods={"POST"})
 */
class WithListCreateUser
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new JsonResponse("Create list of users with given input");
    }
}