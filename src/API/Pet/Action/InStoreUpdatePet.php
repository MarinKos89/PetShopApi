<?php

namespace App\API\Pet\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class InStoreUpdatePet
 * @package App\API\Pet\Action
 * @Route("/pet/{petID}", name="in_store_update_pet",methods={"POST"})
 */
class InStoreUpdatePet
{
    /**
     * @param $petID
     * @return JsonResponse
     */
    public function __invoke($petID):JsonResponse
    {
        return new JsonResponse("in store update pet");
    }

}