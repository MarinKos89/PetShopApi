<?php

namespace App\API\Pet\Handler;


use App\API\Pet\Command\InStoreUpdatePetCommand;
use App\API\Pet\Service\PetService;

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
     * @return int
     */
    public function handle(){
        return $this->service->updatePet();
    }

    public function handlePet(InStoreUpdatePetCommand $petCommand){

        return $this->service
            ->updatePet($petCommand->toArray());
    }



}