<?php

namespace App\API\Pet\Service;

use App\API\Pet\Entity\Pet;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        SerializerInterface     $serializer
    ) {
        $this->entityManager    = $entityManager;
        $this->serializer       = $serializer;
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


    public function addPetToStore(array $petData)
    {
        $pet=new Pet();
        $pet->setName($petData['name']);
        $pet->setCategory($petData['category']);
        $pet->setPhotoUrls($petData['photoUrls']);
        $pet->setTags($petData['tags']);
        $pet->setStatus($petData['status']);

        $this->entityManager->persist($pet);
        $this->entityManager->flush();

        return $pet->getId();
    }

//    /**
//     * @param $name
//     * @param Request $request
//     * @return JsonResponse
//     */
//    public function updatePet($name, Request $request)
//    {
//        $pet = $this->entityManager -> getRepository(Pet::class);
//
//        if (!$pet) {
//            $this->throw404();
//        }
//
//        $data = json_decode($request->getContent(), true);
//
//        $pet->name = $data['nickname'];
//        $pet->avatarNumber = $data['avatarNumber'];
//        $pet->tagLine = $data['tagLine'];
//        $pet->userId = $this->findUserByUsername('weaverryan')->id;
//
//        $this->save($pet);
//
//        $data = $this->serializer->serialize($pet);
//
//        $response = new JsonResponse($data, 200);
//
//        return $response;
//    }
}