<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 23.4.2018.
 * Time: 19:40
 */

namespace App\API\Pet\Handler;

use App\API\Pet\Command\ByStatusFindPetCommand;
use App\API\Pet\Service\PetService;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ByStatusFindPetHandler
 * @package App\API\Pet\Handler
 */
class ByStatusFindPetHandler
{


    /**
     * @var PetService $service
     */
    private $service;

    /**
     * ByStatusFindPetHandler constructor.
     * @param PetService $service
     */
    public function __construct(PetService $service)
    {
        $this->service = $service;
    }


    /**
     * @param ByStatusFindPetCommand $command
     * @return Response
     */
    public function handle(ByStatusFindPetCommand $command)
    {


        return $this->service->byStatusFindPet($command->toArray());

    }


}