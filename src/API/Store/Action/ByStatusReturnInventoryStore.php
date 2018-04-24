<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:21
 */

namespace App\API\Store\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByStatusReturnInventoryStore
 * @package App\API\Store\Action
 * @Route("/store/inventory", name="status_inventory",methods={"GET"})
 */
class ByStatusReturnInventoryStore
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("store inventory");
    }

}