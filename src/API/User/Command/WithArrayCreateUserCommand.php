<?php


namespace App\API\User\Command;

use Assert\Assert;

/**
 * Class WithArrayCreateUserCommand
 * @package App\API\User\Command
 */
class WithArrayCreateUserCommand
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
     * WithArrayCreateUserCommand constructor.
     * @param string $username
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param string $phone
     * @param int $userStatus
     */
    public function __construct(string $username, string $firstName, string $lastName, string $email, string $password, string $phone, int $userStatus)
    {
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->userStatus = $userStatus;
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
     * @return array
     */
    public static function deserialize(array $command): array
    {
        $buffer = [];
        foreach ($command['users'] AS $user)
        {

            Assert::lazy()
                ->that($user,null)
                ->tryAll()
                ->propertyExists('username','username is required')
                ->propertyExists('firstName','firstName is required')
                ->propertyExists('lastName','lastName is required')
                ->propertyExists('email','email is required')
                ->propertyExists('password','password is required')
                ->propertyExists('phone','phone is required')
                ->propertyExists('userStatus','userStatus is required')
                ->verifyNow();

            $buffer[] = new WithArrayCreateUserCommand(
                $user->username,
                $user->firstName,
                $user->lastName,
                $user->email,
                $user->password,
                $user->phone,
                $user->userStatus
            );
        }

        return $buffer;
    }


}