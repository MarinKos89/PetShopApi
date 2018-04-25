<?php

namespace App\API\Pet\Service;

use App\API\Pet\Entity\Pet;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PetService
{
    //bit će lakše ispočetka
    #1. trebamo entity manafer interface
    private $entityManager;

    #2. trebamo serijalizaciju
    private $serializer;
    /**
     * PetService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface     $serializer
    ) {
        $this->entityManager    = $entityManager;
        $this->serializer       = $serializer;
    }

    public function byIDFindPet(int $petID)
    {
        #3. gle sad glupisti...
        return $this->serializer->serialize(
            $this->entityManager
                ->getRepository(Pet::class)
                ->find($petID),
            'json'
        );
    }
}