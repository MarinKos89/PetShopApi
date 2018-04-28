<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:25
 */

namespace App\API\Store\Action;

use App\API\Store\Command\ByIDFindsPurchaseOrderInStoreCommand;
use App\API\Store\Handler\ByIDDeletePurchaseOrderInStoreHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByIDFindsPurchaseOrderInStore
 * @package App\API\Store\Action
 * @Route("/store/order/{orderID}",name="by_id_finds_purchase_order",methods={"GET"})
 */
class ByIDFindsPurchaseOrderInStore
{


    /**
     * @var ByIDDeletePurchaseOrderInStoreHandler $handler
     */
    private $handler;

    /**
     * ByIDFindsPurchaseOrderInStore constructor.
     * @param ByIDDeletePurchaseOrderInStoreHandler $handler
     */
    public function __construct(ByIDDeletePurchaseOrderInStoreHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param $id
     * @return Response
     */
    public function __invoke($id):Response
    {
        $command=ByIDFindsPurchaseOrderInStoreCommand::deserialize($id);

        $orderID=$this->handler->handle($command);

        if ($orderID){
            return new Response('Successful operation ', 200);
        }


       return new Response("Order not found ", 404);
    }

}