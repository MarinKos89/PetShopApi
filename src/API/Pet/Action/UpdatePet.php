<?php

namespace App\API\Pet\Action;

use App\API\Pet\Command\UpdatePetCommand;
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
     * @param $petID
     * @return JsonResponse
     */
    public function __invoke(Request $request,$petID):Response
    {
        $command=UpdatePetCommand::deserialize(
            (array)json_decode($request->getContent(false))
        );

        $success=$this->handler->handleUpdatePet($command);

        if ($success)
        {
            return new Response('Pesek je update-an ' .$success);
        }

        return new Response("invalid input",400);
    }

}