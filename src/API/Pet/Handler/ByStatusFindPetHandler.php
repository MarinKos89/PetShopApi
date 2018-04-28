<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 23.4.2018.
 * Time: 19:40
 */

namespace App\API\Pet\Handler;
use App\API\Pet\Service\PetService;

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
     * @param $status
     * @return string
     */
    public function handle($status){


        return $this->service->byStatusFindPet($status);

    }


}