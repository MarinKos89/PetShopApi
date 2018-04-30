<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 28.4.2018.
 * Time: 21:32
 */

namespace App\API\Store\Handler;
use App\API\Store\Command\OrderAPetFromStoreCommand;
use App\API\Store\Service\StoreService;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class OrderAPetFromStoreHandler
 * @package App\API\Store\Handler
 */
class OrderAPetFromStoreHandler
{

    /**
     * @var StoreService $service
     */
    private $service;

    /**
     * OrderAPetFromStoreHandler constructor.
     * @param StoreService $service
     */
    public function __construct(StoreService $service)
    {
        $this->service = $service;
    }


    /**
     * @param OrderAPetFromStoreCommand $orderAPetFromStoreCommand
     * @return Response
     */
    public function handle(OrderAPetFromStoreCommand $orderAPetFromStoreCommand){
        return $this->service->placeAnOrder($orderAPetFromStoreCommand->toArray());
    }


}