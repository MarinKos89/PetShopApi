<?php


namespace App\API\Pet\Handler;
use App\API\Pet\Command\UpdatePetCommand;
use App\API\Pet\Entity\Pet;
use App\API\Pet\Service\PetService;
use Symfony\Component\HttpFoundation\Response;

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
     * @param UpdatePetCommand $updatePetCommand
     * @param Pet $id
     * @return Response
     */
    public function handle(UpdatePetCommand $updatePetCommand, $id){

        return $this->service->updatePet($updatePetCommand->toArray(),$id);
    }


}