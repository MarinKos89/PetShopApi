<?php

namespace App\API\Pet\Handler;


use App\API\Pet\Command\InStoreUpdatePetCommand;
use App\API\Pet\Service\PetService;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class InStoreUpdatePetHandler
 * @package App\API\Pet\Handler
 */
class InStoreUpdatePetHandler
{

    /**
     * @var PetService $service
     */
    private $service;

    /**
     * InStoreUpdatePetHandler constructor.
     * @param PetService $service
     */
    public function __construct(PetService $service)
    {
        $this->service = $service;
    }


    /**
     * @param InStoreUpdatePetCommand $updatePetCommand
     * @param $petID
     * @return Response
     */
    public function handle(InStoreUpdatePetCommand $updatePetCommand, $petID)
    {
        return $this->service->inStoreUpdatePet($updatePetCommand->toArray(), $petID);
    }


}