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
     * @param string $name
     * @param int $status
     */
    public function __construct( string $name, int $status)
    {

        $this->name = $name;
        $this->status = $status;
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

    public function toArray():array{

        return [
            'name'=>$this->getName(),
            'status'=>$this->getStatus()
        ];
    }

    public static function deserialize(array $command): InStoreUpdatePetCommand{

        Assert::lazy()
            ->that($command,null)
            ->tryAll()

            ->keyExists('name','name is required')

            ->keyExists('status','status is required')
            ->verifyNow();

        return new InStoreUpdatePetCommand(

            $command['name'],
            $command['status']
        );

    }


}