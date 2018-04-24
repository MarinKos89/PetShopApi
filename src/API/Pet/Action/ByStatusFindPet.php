<?php


namespace App\API\Pet\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByStatusFindPet
 * @package App\API\Pet\Action
 * @Route("/pet/findByStatus", name="pet_findByStatus", methods={"GET"})
 */
class ByStatusFindPet
{
    /**
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        // TODO: Implement __invoke() method.
        return new JsonResponse("status ");
    }
}