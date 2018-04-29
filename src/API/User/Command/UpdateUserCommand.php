<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 27.4.2018.
 * Time: 15:20
 */

namespace App\API\User\Command;


use Assert\Assert;

class UpdateUserCommand
{

    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $phone
     */
    private $phone;

    /**
     * @var int $userStatus
     */
    private $userStatus;

    /**
     * UpdateUserCommand constructor.
     * @param int $id
     * @param string $username
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param string $phone
     * @param int $userStatus
     */
    public function __construct(int $id, string $username, string $firstName, string $lastName, string $email, string $password, string $phone, int $userStatus)
    {
        $this->id = $id;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->userStatus = $userStatus;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getUserStatus(): int
    {
        return $this->userStatus;
    }

    /**
     * @param int $userStatus
     */
    public function setUserStatus(int $userStatus): void
    {
        $this->userStatus = $userStatus;
    }

    /**
     * @return array
     */
    public function toArray():array
    {
        return[
            'id'         => $this->getId(),
            'username'   => $this->getUsername(),
            'firstName'  => $this->getFirstName(),
            'lastName'   => $this->getLastName(),
            'email'      => $this->getEmail(),
            'password'   => $this->getPassword(),
            'phone'      => $this->getPhone(),
            'userStatus' => $this->getUserStatus()
        ];
    }

    /**
     * @param array $command
     * @return UpdateUserCommand
     */
    public static function deserialize(array $command): UpdateUserCommand
    {
        Assert::lazy()
            ->that($command,null)
            ->tryAll()
            ->keyExists('id','username is required')
            ->keyExists('username','username is required')
            ->keyExists('firstName','firstName is required')
            ->keyExists('lastName','lastName is required')
            ->keyExists('email','email is required')
            ->keyExists('password','password is required')
            ->keyExists('phone','phone is required')
            ->keyExists('userStatus','userStatus is required')
            ->verifyNow();

        return new UpdateUserCommand(
            $command['id'],
            $command['username'],
            $command['firstName'],
            $command['lastName'],
            $command['email'],
            $command['password'],
            $command['phone'],
            $command['userStatus']
        );
    }

}