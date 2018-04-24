<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:25
 */

namespace App\API\Store\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByIDFindsPurchaseOrderinStore
 * @package App\API\Store\Action
 * @Route("/store/order/{orderID}",name="by_id_finds_purchase_order",methods={"GET"})
 */
class ByIDFindsPurchaseOrderinStore
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new JsonResponse("find purchase order by ID");
    }

}