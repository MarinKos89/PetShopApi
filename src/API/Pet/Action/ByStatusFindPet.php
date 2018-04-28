<?php


namespace App\API\Pet\Action;

use App\API\Pet\Command\ByStatusFindPetCommand;
use App\API\Pet\Handler\ByStatusFindPetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByStatusFindPet
 * @package App\API\Pet\Action
 * @Route("/pet/findByStatus", name="pet_findByStatus", methods={"GET"})
 */
class ByStatusFindPet
{


    /**
     * @var ByStatusFindPetHandler $handler
     */
    private $handler;

    /**
     * ByStatusFindPet constructor.
     * @param ByStatusFindPetHandler $handler
     */
    public function __construct(ByStatusFindPetHandler $handler)
    {
        $this->handler = $handler;
    }


    /**
     * @param $status
     * @return string
     */
    public function __invoke($status): Response
    {

        return $this->handler->handle($status);

    }
}