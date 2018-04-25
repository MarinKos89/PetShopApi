<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 24.4.2018.
 * Time: 23:06
 */

namespace App\API\User\Service;

use App\API\User\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class UserService
 * @package App\API\User\Service
 */
class UserService
{

    /**
     * @var EntityManagerInterface $entityManager
     */
    private $entityManager;

    /**
     * @var SerializerInterface $serializer
     */
    private $serializer;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $entityManager
     * @param SerializerInterface $serializer
     */
    public function __construct(EntityManagerInterface $entityManager, SerializerInterface $serializer)
    {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
    }

    /**
     * @return string
     */
    public function selectUsers()
    {

        return $this->serializer->serialize(
            $this->entityManager
                ->getRepository(User::class)
                ->findAll(),
            'json'
        );
    }

    public function createUser(array $userData)
    {
        $user = new User();
        $user->setUsername($userData['username']);
        $user->setFirstName($userData['firstName']);
        $user->setLastName($userData['lastName']);
        $user->setEmail($userData['email']);
        $user->setPhone($userData['phone']);
        $user->setUserStatus($userData['userStatus']);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $user->getId();
    }
}