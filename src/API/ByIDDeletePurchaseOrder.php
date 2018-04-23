<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:26
 */

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByIDDeletePurchaseOrder
 * @package App\API
 * @Route("/store/order/{orderID}",name=o"rderID",methods={"DELETE"})
 */
class ByIDDeletePurchaseOrder
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new  JsonResponse("Delete purchase order by ID");
    }

}