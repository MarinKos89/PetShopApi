<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 28.4.2018.
 * Time: 22:23
 */

namespace App\API\Store\Handler;
use App\API\Store\Service\StoreService;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByIDDeletePurchaseOrderInStoreHandler
 * @package App\API\Store\Handler
 */
class ByIDDeletePurchaseOrderInStoreHandler
{

    /**
     * @var StoreService $service
     */
    private $service;

    /**
     * ByIDDeletePurchaseOrderInStoreHandler constructor.
     * @param StoreService $service
     */
    public function __construct(StoreService $service)
    {
        $this->service = $service;
    }


    /**
     * @param $id
     * @return Response
     */
    public function handle($id){

        return $this->service->deleteOrder($id);
    }


}