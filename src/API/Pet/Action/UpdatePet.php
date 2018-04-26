<?php

namespace App\API\Pet\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class UpdatePet
 * @package App\API\Pet\Action
 * @Route("/pet", name="update_pet", methods={"PUT"})
 */
class UpdatePet
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("update pet");
    }

}