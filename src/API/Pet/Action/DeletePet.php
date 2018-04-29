<?php

namespace App\API\Pet\Action;

use App\API\Pet\Entity\Pet;
use App\API\Pet\Handler\DeletePetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DeletePet
 * @package App\API\Pet\Action
 * @Route("/pet/{petID}", name="delete_pet",methods={"DELETE"})
 */
class DeletePet
{

    /**
     * @var DeletePetHandler $handler
     */
    private $handler;

    /**
     * DeletePet constructor.
     * @param DeletePetHandler $handler
     */
    public function __construct(DeletePetHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param Request $request
     * @param Pet $id
     * @return Response
     */
    public function  __invoke(Request $request,$id):Response
    {
       return $this->handler->handle($id);
    }

}