<?php


namespace App\API\User\Service;

use App\API\User\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
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

    /**
     * @param $user
     * @return Response
     */
    public function createUser($user)
    {
        $repository = $this->entityManager->getRepository(User::class);
        $existingUser = $repository->findOneBy(array('email' => $user));

        if (!is_null($existingUser)) {
            $newUser = new User();
            $newUser->setUsername($user['username']);

            $newUser->setFirstName($user['firstName']);

            $newUser->setLastName($user['lastName']);

            $newUser->setEmail($user['email']);

            $newUser->setPassword($user['password']);

            $newUser->setPhone($user['phone']);

            if (!in_array($user['userStatus'], User::STASUS)) {
                return new Response('Invalid status', 405);
            }

            $newUser->setUserStatus($user['userStatus']);
            $this->entityManager->persist($newUser);
            $this->entityManager->flush();

            return new Response('successful operation ', 200);
        }
        return new Response('User exists', 200);
    }


    /**
     * @param User $username
     * @return Response
     */
    public function deleteUser($username)
    {

        $repository = $this->entityManager->getRepository(User::class);
        $existingUser = $repository->findOneBy(array('email' => $username));

        if (!is_null($existingUser)) {
            $this->entityManager->remove($existingUser);
            $this->entityManager->flush();

            return new Response('Successful operation', 200);
        }

        return new Response('User not found ', 404);
    }


    /**
     * @param array $user
     * @param string $username
     * @return Response
     */
    public function updateUser($user, $username)
    {

        $repository = $this->entityManager->getRepository(User::class);
        $existingUser = $repository->findOneBy(array('email' => $username));

        if (!is_null($existingUser)) {

            if (!in_array($user['userStatus'], User::STASUS)) {
                return new Response('Invalid status ', 405);
            }

            $existingUser->setUsername($user['username']);
            $existingUser->setFirstName($user['firstName']);
            $existingUser->setLastName($user['lastName']);
            $existingUser->setEmail($user['email']);
            $existingUser->setPassword($user['password']);
            $existingUser->setPhone($user['phone']);
            $existingUser->setUserStatus($user['userStatus']);
            $this->entityManager->flush();

            return new Response('Successful operation', 200);


        }
        return new Response('Invalid user supplied ', 400);

    }


    /**
     * @param $username
     * @return Response
     */
    public function selectUser($username)
    {

        $repository = $this->entityManager->getRepository(User::class);
        $existingUser = $repository->findOneBy(array('email' => $username));

        if (!is_null($existingUser)) {

            return new Response($this->serializer->serialize(
                $repository->find($existingUser),
                'json'
            ), 200
            );

        }

        return new Response('Invalid user supplied ', 400);

    }


    /**
     * @param array $users
     * @return Response
     */
    public function withArrayCreateUser($users)
    {
        $in  = count($users);
        $out = 0;
        foreach ($users AS $user)
        {
            $repository = $this->entityManager->getRepository(User::class);
            $existingUser = $repository->findOneBy(array('email' => $user->getEmail()));

            if(is_null($existingUser))
            {
                $newUser = new User();
                $newUser->setUsername($user->getUsername());
                $newUser->setFirstName($user->getFirstName());
                $newUser->setLastName($user->getLastName());
                $newUser->setEmail($user->getEmail());
                $newUser->setPassword($user->getPassword());
                $newUser->setPhone($user->getPhone());

                if (!in_array($user->getUserStatus(),User::STASUS))
                {
                    return new Response('Invalid status', 405);
                }

                $newUser->setUserStatus($user->getUserStatus());
                $this->entityManager->persist($newUser);
                $this->entityManager->flush();
                ++$out;
            }
        }

        if($in == $out)
        {
            return new Response('Successful operation', 200);

        }

        return new Response('User exists', 200);
    }


    /**
     * @param array $loginData
     * @return bool
     */
    public function loginUser($loginData){

        $repository=$this->entityManager->getRepository(User::class);
        $existingUser=$repository->findOneBy(array(
            'username'=>$loginData['username'],
            'password'=>$loginData['password']
        ));

        $session=new Session();
        if ($existingUser instanceof User){
            $user=new User();
            $user->setUsername($existingUser->getUsername());
            $user->setPassword($existingUser->getPassword());
            $user->setIsLoggedIn(true);

            $session->set('user',$user);

            return true;
        }

        $session->set('user',null);

        return false;

    }

    /**
     * @return bool
     */
    public function logoutUser(){

        $session=new Session();
        $session->set('user',null);
        return true;
    }
































}