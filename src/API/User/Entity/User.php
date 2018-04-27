<?php

namespace App\API\User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{

    const STASUS = ['active'=>1,'not_active'=>0];

    /**
     * @var int $id
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string $username
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @var string $password
     * @ORM\Column(type="string", length=128)
     */
    private $password;

    /**
     * @var string $firstName
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @var string $lastName
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @var string $email
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @var string $phone
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @var int $userStatus
     * @ORM\Column(type="integer")
     */
    private $userStatus;


    /**
     * @var bool $isLoggedIn
     */
    private $isLoggedIn;

    /**
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return $this->isLoggedIn;
    }

    /**
     * @param bool $isLoggedIn
     */
    public function setIsLoggedIn(bool $isLoggedIn): void
    {
        $this->isLoggedIn = $isLoggedIn;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
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

    public function getUserStatus(): ?int
    {
        return $this->userStatus;
    }

    public function setUserStatus(int $userStatus): self
    {
        $this->userStatus = $userStatus;

        return $this;
    }
}
