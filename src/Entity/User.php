<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 18.4.2018.
 * Time: 22:01
 */

namespace App\Controller\Entity;


class User
{




    /**
     * @var int64 $id
     */
    protected $id;


    /**
     * @var string $username
     */
    protected $username;

    /**
     * @var string $firstName
     */
    protected $firstName;
    /**
     * @var string $lastName
     */
    protected $lastName;
    /**
     * @var string $email
     */
    protected  $email;
    /**
     * @var string $password
     */
    protected $password;

    /**
     * @return int64
     */


    /**
     * @var $phone
     */

    protected $phone;

    /**
     * @var int32 $userStatus
     */
    protected $userStatus;




    public function getId(): int64
    {
        return $this->id;
    }

    /**
     * @param int64 $id
     */
    public function setId(int64 $id): void
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
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int32
     */
    public function getUserStatus(): int32
    {
        return $this->userStatus;
    }

    /**
     * @param int32 $userStatus
     */
    public function setUserStatus(int32 $userStatus): void
    {
        $this->userStatus = $userStatus;
    }



}