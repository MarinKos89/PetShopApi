<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 23.4.2018.
 * Time: 19:40
 */

namespace App\API\Pet\Command;

use App\API\Pet\Handler\ByStatusFindPetHandler;
use Assert\Assert;

/**
 * Class ByStatusFindPetCommand
 * @package App\API\Pet\Command
 */
class ByStatusFindPetCommand
{


    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $status;

    /**
     * ByStatusFindPetCommand constructor.
     * @param int $id
     * @param string $name
     * @param string $status
     */
    public function __construct(int $id, string $name, string $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'petID' => $this->getId(),
            'name' => $this->getName(),
            'status' => $this->getStatus()
        ];
    }

    /**
     * @param array $byStatusFindPet
     * @return ByStatusFindPetCommand
     */
    public static function deserialize(array $byStatusFindPet): ByStatusFindPetCommand
    {
        Assert::lazy()
            ->that($byStatusFindPet, null)
            ->tryAll()
            ->keyExists('id', 'id is required')
            ->keyExists('name', 'name is required')
            ->keyExists('status', 'status is required')
            ->verifyNow();

        return new ByStatusFindPetCommand(
            $byStatusFindPet['id'],
            $byStatusFindPet['name'],
            $byStatusFindPet['status']
        );

    }


}