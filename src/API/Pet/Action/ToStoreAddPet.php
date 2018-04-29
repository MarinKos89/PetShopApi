<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:04
 */

namespace App\API\Pet\Action;

use App\API\Pet\Command\ToStoreAddPetCommand;
use App\API\Pet\Handler\ToStoreAddPetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ToStoreAddPet
 * @package App\API\Pet\Action
 * @Route("/pet",name="to_store_add_pet",methods={"POST"})
 */
class ToStoreAddPet
{

    /**
     * @var ToStoreAddPetHandler $handler
     */
    private $handler;

    /**
     * ToStoreAddPet constructor.
     * @param ToStoreAddPetHandler $handler
     */
    public function __construct(ToStoreAddPetHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $command = ToStoreAddPetCommand::deserialize(
            (array)json_decode($request->getContent(false))
        );

        $success = $this->handler->handlePet($command);

        if ($success) {
            return new Response('Successful operation ' . $success, 200);
        }

        return new Response('Invalid input ', 400);
    }

}