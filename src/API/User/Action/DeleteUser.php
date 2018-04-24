<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:44
 */

namespace App\API\User\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DeleteUser
 * @package App\API\User\Action
 * @Route("/user/{username}",name="delete_user",methods={"DELETE"})
 */
class DeleteUser
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("Delete user");
    }

}