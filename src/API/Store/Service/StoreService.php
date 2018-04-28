<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 26.4.2018.
 * Time: 18:00
 */

namespace App\API\Store\Service;

use App\API\Store\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class StoreService
 * @package App\API\Store\Service
 */
class StoreService
{

    /**
     * @var EntityManagerInterface $entityManager
     */
    private $entityManager;


    /**
     * @var SerializerInterface $serializer
     */
    private $serializer;

    /**
     * StoreService constructor.
     * @param EntityManagerInterface $entityManager
     * @param SerializerInterface $serializer
     */
    public function __construct(EntityManagerInterface $entityManager, SerializerInterface $serializer)
    {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
    }


    /**
     * @param $order
     * @return Response
     */
    public function placeAnOrder($order)
    {

        $store = new Order();
        $store->setId($order['id']);
        $store->setPetID($order['petID']);
        $store->setQuantity($order['quantity']);
        $store->setShipDate($order['shipDate']);
        $store->setComplete($order['complete']);

        $this->entityManager->persist($store);
        $this->entityManager->flush();

        return new Response('Successful operation ', 200);

    }


    /**
     * @param  $id
     * @return Response
     */

    public function deleteOrder($id)
    {

        $repository = $this->entityManager->getRepository(Store::class);
        $existingOrder = $repository->findOneBy(array('id' => $id));

        if (!is_null($existingOrder)) {
            $this->entityManager->remove($existingOrder);
            $this->entityManager->flush();

            return new Response('Successful operation', 200);
        }

        return new Response('Order not found ', 404);

    }


    /**
     * @param int $orderID
     * @return string
     */
    public function findOrderByID($orderID)
    {
        if ($orderID >=1 And $orderID <=10 )
        {
            return $this->serializer->serialize(
                $this->entityManager
                    ->getRepository(Order::class)
                    ->find($orderID),
                'json'

            );
        }

    }


}