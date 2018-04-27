<?php


namespace App\API\Pet\Handler;

use App\API\Pet\Entity\Pet;
use App\API\Pet\Service\PetService;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DeletePetHandler
 * @package App\API\Pet\Handler
 */
class DeletePetHandler
{

    /**
     * @var PetService $service
     */
    private $service;

    /**
     * DeletePetHandler constructor.
     * @param PetService $service
     */
    public function __construct(PetService $service)
    {
        $this->service = $service;
    }


    /**
     * @param Pet $id
     * @return Response
     */
    public function handle($id){

        return $this->service->deletePet($id);
    }


}