<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:23
 */

namespace App\API\Store\Action;

use App\API\Store\Command\OrderAPetFromStoreCommand;
use App\API\Store\Handler\OrderAPetFromStoreHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class OrderAPetFromStore
 * @package App\API\Store\Action
 * @Route("/store/order",name="order_a_pet_from_store",methods={"POST"})
 */
class OrderAPetFromStore
{

    /**
     * @var OrderAPetFromStoreHandler $handler
     */
    private $handler;

    /**
     * OrderAPetFromStore constructor.
     * @param OrderAPetFromStoreHandler $handler
     */
    public function __construct(OrderAPetFromStoreHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request):Response
    {
        $command = OrderAPetFromStoreCommand::deserialize(
            (array) json_decode($request->getContent(false))
        );

        $success = $this->handler->handle($command);
        if ($success)
        {
            return $success;
        }

        return new Response('invalid order ',400);
    }

}