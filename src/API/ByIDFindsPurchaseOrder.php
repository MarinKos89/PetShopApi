<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:25
 */

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ByIDFindsPurchaseOrder
 * @package App\API
 * @Route("/store/order/{orderID}",name="orderID",methods={"GET"})
 */
class ByIDFindsPurchaseOrder
{
    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
       return new JsonResponse("find purchase order by ID");
    }

}