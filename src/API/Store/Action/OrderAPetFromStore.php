<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:23
 */

namespace App\API\Store\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Class OrderAPetFromStore
 * @package App\API\Store\Action
 * @Route("/store/order",name="order_a_pet_from_store",methods={"POST"})
 */
class OrderAPetFromStore
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return new JsonResponse("Place an order for a pet");
    }

}