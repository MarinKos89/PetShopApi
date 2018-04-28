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

    /**
     * @param int $petID
     * @return string
     */
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
     * @param $pet
     * @return Response
     */
    public function byStatusFindPet($pet)
    {


        $repository = $this->entityManager->getRepository(Pet::class);
        $petStatus = $repository->findOneBy(array('status' => Pet::STATUS));

        if (!is_null($petStatus)) {

            return new Response($this->serializer->serialize(
                $repository->find($pet),
                'json'
            ), 200
            );

        }

        return new Response('Invalid user supplied ', 400);

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

        return new Response('Successful operation ', 200);
    }


    /**
     * @param array $id
     * @param Pet $pet
     * @return Response
     */
    public function updatePet($id, $pet)
    {

        $repository = $this->entityManager->getRepository(Pet:: class);
        $existingPet = $repository->find($id);

        if (!is_null($existingPet)) {
            $existingPet->setID($pet['id']);
            $existingPet->setCategory($pet['category']);
            $existingPet->setPhotoUrls($pet['photoUrls']);
            $existingPet->setTags($pet['tags']);
            $existingPet->setStatus($pet['status']);
            $this->entityManager->flush();


            return new Response('Successful operation ', 200);
        }

        return new Response('invalid id supplied ', 400);


    }


    /**
     * @param Pet $id
     * @return Response
     */
    public function deletePet($id)
    {


        $repository = $this->entityManager->getRepository(Pet::class);
        $pet = $repository->find($id);

        if (!is_null($id)) {
            $this->entityManager->remove($pet);
            $this->entityManager->flush();

            return new Response('Successful operation ', 200);
        }

        return new Response('Pet not found ', 404);
    }


    /**
     * @param $pet
     * @param $petID
     * @return Response
     */
    public function inStoreUpdatePet($pet, $petID)
    {
        $repository = $this->entityManager->getRepository(Pet::class);
        $existingPet = $repository->findOneBy(array('id' => $petID));

        if (!is_null($existingPet)) {

            $existingPet->setId($pet['id']);
            $existingPet->setName($pet['name']);
            $existingPet->setStatus($pet['status']);
            $this->entityManager->flush();

            return new Response('Successful operation ', 200);

        }

        return new Response('Invalid input ', 400);

    }


}