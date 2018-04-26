<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 23.4.2018.
 * Time: 19:42
 */

namespace App\API\Pet\Handler;
use App\API\Pet\Service\PetService;

/**
 * Class UpdatePetHandler
 * @package App\API\Pet\Handler
 */
class UpdatePetHandler
{
    /**
     * @var PetService $service
     */
    private $service;

    /**
     * UpdatePetHandler constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->service = $service;
    }

    /**
     * @return string
     */
    public function handle(){
       return $this->service->selectPets();
    }





}