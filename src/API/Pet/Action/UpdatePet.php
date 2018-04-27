<?php

namespace App\API\Pet\Action;

use App\API\Pet\Command\UpdatePetCommand;
use App\API\Pet\Entity\Pet;
use App\API\Pet\Handler\UpdatePetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UpdatePet
 * @package App\API\Pet\Action
 * @Route("/pet", name="update_pet", methods={"PUT"})
 */
class UpdatePet
{
    /**
     * @var UpdatePetHandler $handler
     */
    private $handler;

    /**
     * UpdatePet constructor.
     * @param UpdatePetHandler $handler
     */
    public function __construct(UpdatePetHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param Request $request
     * @param Pet $petID
     * @return Response
     */
    public function __invoke(Request $request,$petID):Response
    {
       $command=UpdatePetCommand::deserialize(
           (array) json_decode($request->getContent(false))
       );

       return $this->handler->handle($command,$petID);
    }

}