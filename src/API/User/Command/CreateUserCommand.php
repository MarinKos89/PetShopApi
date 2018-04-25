<?php

namespace App\API\User\Command;

use Assert\Assert;

class CreateUserCommand
{
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
     * @var string $phone
     */
    private $phone;

    /**
     * @var int $userStatus
     */
    private $userStatus;

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
     * CreateUserCommand constructor.
     * @param string $username
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $phone
     * @param int $userStatus
     */
    public function __construct(string $username, string $firstName, string $lastName, string $email, string $phone, int $userStatus)
    {
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->userStatus = $userStatus;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'username'      => $this->getUsername(),
            'firstName'     => $this->getFirstName(),
            'lastName'      => $this->getLastName(),
            'email'         => $this->getEmail(),
            'phone'         => $this->getPhone(),
            'userStatus'    => $this->getUserStatus()
        ];
    }

    /**
     * @param array $command
     * @return CreateUserCommand
     */
    public static function deserialize(array $command): CreateUserCommand
    {
        Assert::lazy()
            ->that($command, null)
            ->tryAll()
            ->keyExists('username', 'username is required')
            ->keyExists('firstName', 'firstName is required')
            ->keyExists('lastName', 'lastName is required')
            ->keyExists('email', 'email is required')
            ->keyExists('phone', 'phone is required')
            ->keyExists('userStatus', 'userStatus is required')
            ->verifyNow();

        return new CreateUserCommand(
            $command['username'],
            $command['firstName'],
            $command['lastName'],
            $command['email'],
            $command['phone'],
            $command['userStatus']
        );
    }
}