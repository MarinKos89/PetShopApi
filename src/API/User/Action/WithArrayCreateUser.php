<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:34
 */

namespace App\API\User\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class WithArrayCreateUser
 * @package App\API\User\Action
 * @Route("user/createWithArray",name="with_array_create_user",methods={"POST"})
 */
class WithArrayCreateUser
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("Create list of users with given input array");
    }
}