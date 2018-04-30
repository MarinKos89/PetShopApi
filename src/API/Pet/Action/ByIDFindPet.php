<?php

namespace App\API\Pet\Action;

use App\API\Pet\Command\ByIDFindPetCommand;
use App\API\Pet\Handler\ByIDFindPetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByIDFindPet
 * @package App\API\Pet\Action
 * @Route("pet/{petID}",name="petID",methods={"GET"})
 */
class ByIDFindPet extends Controller
{
    /**
     * @var ByIDFindPetHandler $handler
     */
    private $handler;

    /**
     * ByIDFindPet constructor.
     * @param ByIDFindPetHandler $handler
     */
    public function __construct(
        ByIDFindPetHandler $handler
    )
    {
        $this->handler = $handler;
    }

    /**
     * @param int $petID
     * @return Response
     */
    public function __invoke($petID): Response
    {

        $command = ByIDFindPetCommand::deserialize($petID);


        $pet = $this->handler->handle($command);

        if ($pet) {
            return new Response($pet);
        }

        return new Response('Invalid input ', 400);
    }
}