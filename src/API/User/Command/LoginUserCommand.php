<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 27.4.2018.
 * Time: 22:12
 */

namespace App\API\User\Command;
use Assert\Assert;

/**
 * Class LoginUserCommand
 * @package App\API\User\Command
 */
class LoginUserCommand
{


    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $password
     */
    private $password;

    /**
     * LoginUserCommand constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
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
     * @return array
     */
    public function toArray():array {

        return[
          'username'=>$this->getUsername(),
          'password'=>$this->getPassword()
        ];
    }


    public static function deserialize(array $command): LoginUserCommand{

        Assert::lazy()
            ->that($command,null)
            ->tryAll()
            ->keyExists('username','username is required')
            ->keyExists('password','password i required')
            ->verifyNow();


        return new LoginUserCommand(
            $command['username'],
            $command['password']
        );
    }





















}