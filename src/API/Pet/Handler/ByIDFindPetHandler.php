<?php

namespace App\API\Pet\Handler;


use App\API\Pet\Command\ByIDFindPetCommand;
use App\API\Pet\Service\PetService;

class ByIDFindPetHandler
{
    /**
     * @var PetService $petService
     */
    private $petService;

    /**
     * ByIDFindPetHandler constructor.
     * @param PetService $petService
     */
    public function __construct(PetService $petService)
    {
        $this->petService = $petService;
    }

    /**
     * @param ByIDFindPetCommand $command
     * @return mixed
     */
    public function handle(ByIDFindPetCommand $command)
    {
        return $this->petService->byIDFindPet($command->getPetID());
    }
}