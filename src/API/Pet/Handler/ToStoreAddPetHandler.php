<?php


namespace App\API\Pet\Handler;

use App\API\Pet\Service\PetService;
use App\API\Pet\Command\ToStoreAddPetCommand;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class ToStoreAddPetHandler
 * @package App\API\Pet\Handler
 */
class ToStoreAddPetHandler
{
    /**
     * @var PetService $service
     */
    private $service;

    /**
     * ToStoreAddPetHandler constructor.
     * @param PetService $service
     */
    public function __construct(PetService $service)
    {
        $this->service = $service;
    }


    /**
     * @return string
     */
    public function handle()
    {
        return $this->service->selectPets();
    }


    /**
     * @param ToStoreAddPetCommand $petData
     * @return Response
     */
    public function handlePet(ToStoreAddPetCommand $petData)
    {
        return $this->service
            ->addPetToStore($petData->toArray());
    }


}