<?php


namespace App\API\Pet\Command;

use Assert\Assert;

class InStoreUpdatePetCommand
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
     * @var int
     */
    private $status;

    /**
     * InStoreUpdatePetCommand constructor.
     * @param int $id
     * @param string $name
     * @param int $status
     */
    public function __construct(int $id, string $name, int $status)
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
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function toArray(): array
    {

        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'status' => $this->getStatus()
        ];
    }

    public static function deserialize(array $command): InStoreUpdatePetCommand
    {

        Assert::lazy()
            ->that($command, null)
            ->tryAll()
            ->keyExists('id', 'id is required')
            ->keyExists('name', 'name is required')
            ->keyExists('status', 'status is required')
            ->verifyNow();

        return new InStoreUpdatePetCommand(

            $command['id'],
            $command['name'],
            $command['status']
        );

    }


}