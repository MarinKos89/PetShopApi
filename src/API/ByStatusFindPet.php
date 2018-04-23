<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 18.4.2018.
 * Time: 19:43
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByStatusFindPet
 * @package App\API
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