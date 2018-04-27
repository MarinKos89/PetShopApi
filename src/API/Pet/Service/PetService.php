<?php

namespace App\API\Pet\Service;

use App\API\Pet\Entity\Pet;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class PetService
{

    private $entityManager;

    #2. trebamo serijalizaciju
    private $serializer;

    /**
     * PetService constructor.
     * @param EntityManagerInterface $entityManager
     * @param SerializerInterface $serializer
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer
    )
    {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
    }

    public function byIDFindPet(int $petID)
    {

        return $this->serializer->serialize(
            $this->entityManager
                ->getRepository(Pet::class)
                ->find($petID),
            'json'
        );
    }

    /**
     * @return string
     */
    public function selectPets()
    {
        return $this->serializer->serialize(
            $this->entityManager
                ->getRepository(Pet::class)
                ->findAll(),
            'json'
        );
    }


    /**
     * @param array $petData
     * @return Response
     */
    public function addPetToStore(array $petData)
    {

        $pet = new Pet();
        $pet->setName($petData['name']);
        $pet->setCategory($petData['category']);
        $pet->setPhotoUrls($petData['photoUrls']);
        $pet->setTags($petData['tags']);
        $pet->setStatus($petData['status']);

        $this->entityManager->persist($pet);
        $this->entityManager->flush();

        return new Response('Successful operation ',200);
    }



    public function updatePet(array $petData)
    {

        $pet = $this->entityManager->getRepository(Pet:: class);


        $pet->name = $petData['name'];
        $pet->category = $petData['category'];
        $pet->photoUrls = $petData['photoUrls'];
        $pet->tags = $petData['tags'];
        $pet->status = $petData['status'];

        $this->entityManager->persist($pet);
        $this->entityManager->flush();

        return $pet;
    }


}