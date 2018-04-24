<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:42
 */

namespace App\API\User\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class UpdateUser
 * @package App\API\User\Action
 * @Route("/user/{username",name="update_user", methods={"PUT"})
 */
class UpdateUser
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("Updated user");
    }
}