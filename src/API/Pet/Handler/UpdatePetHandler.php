<?php


namespace App\API\Pet\Handler;
use App\API\Pet\Command\UpdatePetCommand;
use App\API\Pet\Service\PetService;

/**
 * Class UpdatePetHandler
 * @package App\API\Pet\Handler
 */
class UpdatePetHandler
{


    /**
     * @var PetService  $service
     */
    private $service;

    /**
     * UpdatePetHandler constructor.
     * @param PetService $service
     */
    public function __construct(PetService $service)
    {
        $this->service = $service;
    }


    /**
     * @return string
     */
    public function hadnle(){
        return $this->service->selectPets();
    }

    /**
     * @param UpdatePetCommand $updatePetCommand
     * @return mixed
     */
    public function handleUpdatePet(UpdatePetCommand $updatePetCommand){

        return $this->service
            ->updatePet($updatePetCommand->toArray());
    }


}