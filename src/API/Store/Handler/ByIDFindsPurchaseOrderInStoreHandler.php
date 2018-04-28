<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 29.4.2018.
 * Time: 0:32
 */

namespace App\API\Store\Handler;
use App\API\Store\Command\ByIDFindsPurchaseOrderInStoreCommand;
use App\API\Store\Service\StoreService;

/**
 * Class ByIDFindsPurchaseOrderInStoreHandler
 * @package App\API\Store\Handler
 */
class ByIDFindsPurchaseOrderInStoreHandler
{

    /**
     * @var StoreService $service
     */
    private $service;

    /**
     * ByIDFindsPurchaseOrderInStoreHandler constructor.
     * @param StoreService $service
     */
    public function __construct(StoreService $service)
    {
        $this->service = $service;
    }


    /**
     * @param ByIDFindsPurchaseOrderInStoreCommand $command
     * @return string
     */
    public function handle(ByIDFindsPurchaseOrderInStoreCommand $command){
        return $this->service->findOrderByID($command->getId());
    }


}