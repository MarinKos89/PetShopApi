<?php

namespace App\API\Pet\Action;

use App\API\Pet\Command\ByIDFindPetCommand;
use App\API\Pet\Handler\ByIDFindPetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ByIDFindPet
 * @package App\API\Pet\Action
 * @Route("pet/{petID}",name="petID",methods={"GET"})
 */
class ByIDFindPet
{
    /**
     * @var ByIDFindPetHandler $handler
     */
    private $handler;

    /**
     * ByIDFindPet constructor.
     * @param ByIDFindPetHandler $handler
     */
    public function __construct(ByIDFindPetHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param int $petID
     * @return JsonResponse
     */
    public function __invoke($petID): JsonResponse
    {
        #korak 1
        $command = ByIDFindPetCommand::deserialize($petID);

        #korak 2
        $status = $this->handler->handle($command);

        if($status){
            return new JsonResponse(200);
        }

        return new JsonResponse(501);
    }
}