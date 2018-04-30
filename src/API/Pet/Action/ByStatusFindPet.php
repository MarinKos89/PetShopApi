<?php


namespace App\API\Pet\Action;

use App\API\Pet\Command\ByStatusFindPetCommand;
use App\API\Pet\Handler\ByStatusFindPetHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByStatusFindPet
 * @package App\API\Pet\Action
 * @Route("/pet/findByStatus", name="pet_findByStatus", methods={"GET"})
 */
class ByStatusFindPet extends Controller
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
     * @param Request $request
     * @param string $petStatus
     * @return Response
     */
    public function __invoke(Request $request,$petStatus): Response
    {

        $command = ByStatusFindPetCommand::deserialize(
            (array)json_decode($request->getContent(false))
        );

        return $this->handler->handle($command);


    }
}