<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:26
 */

namespace App\API\Store\Action;

use App\API\Store\Handler\ByIDDeletePurchaseOrderInStoreHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByIDDeletePurchaseOrderInStore
 * @package App\API\Store\Action
 * @Route("/store/order/{orderID}",name="by_id_delete_purchase",methods={"DELETE"})
 */
class ByIDDeletePurchaseOrderInStore
{

    /**
     * @var ByIDDeletePurchaseOrderInStoreHandler $handler
     */
    private $handler;

    /**
     * ByIDDeletePurchaseOrderInStore constructor.
     * @param ByIDDeletePurchaseOrderInStoreHandler $handler
     */
    public function __construct(ByIDDeletePurchaseOrderInStoreHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function __invoke(Request $request,$id):Response
    {


       return $this->handler->handle($id);
    }

}