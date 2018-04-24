<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:26
 */

namespace App\API\Store\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByIDDeletePurchaseOrderInStore
 * @package App\API\Store\Action
 * @Route("/store/order/{orderID}",name="by_id_delete_purchase",methods={"DELETE"})
 */
class ByIDDeletePurchaseOrderInStore
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new  JsonResponse("Delete purchase order by ID");
    }

}