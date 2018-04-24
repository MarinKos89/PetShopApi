<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:28
 */

namespace App\API\User\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class CreateUser
 * @package App\API\User\Action
 * @Route("/user",name="create_user",methods={"POST"})
 */
class CreateUser
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("create user");
    }

}