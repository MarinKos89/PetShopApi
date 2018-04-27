<?php

namespace App\API\Pet\Action;

use App\API\Pet\Command\InStoreUpdatePetCommand;
use App\API\Pet\Handler\InStoreUpdatePetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class InStoreUpdatePet
 * @package App\API\Pet\Action
 * @Route("/pet/{petID}", name="in_store_update_pet",methods={"POST"})
 */
class InStoreUpdatePet
{

    /**
     * @var InStoreUpdatePetHandler $handler
     */
    private $handler;

    /**
     * InStoreUpdatePet constructor.
     * @param InStoreUpdatePetHandler $handler
     */
    public function __construct(InStoreUpdatePetHandler $handler)
    {
        $this->handler = $handler;
    }



    public function __invoke(Request $request):Response
    {

    }

}