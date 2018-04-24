<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:04
 */

namespace App\API\Pet\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ToStoreAddPet
 * @package App\API\Pet\Action
 * @Route("/pet",name="to_store_add_pet",methods={"POST"})
 */
class ToStoreAddPet
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("add pet to store");
    }

}