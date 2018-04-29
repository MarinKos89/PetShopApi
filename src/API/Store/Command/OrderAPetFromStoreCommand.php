<?php


namespace App\API\Store\Command;
use Assert\Assert;


/**
 * Class OrderAPetFromStoreCommand
 * @package App\API\Store\Command
 */
class OrderAPetFromStoreCommand
{

    /**
     * @var int $id
     */
    private $id;

    /**
     * @var int $petID
     */
    private $petID;

    /**
     * @var int $quantity
     */
    private $quantity;

    /**
     * @var string $shipDate
     */
    private $shipDate;

    /**
     * @var string $status
     */
    private $status;

    /**
     * @var bool $complete
     */
    private $complete = false;

    /**
     * OrderAPetFromStoreCommand constructor.
     * @param int $id
     * @param int $petID
     * @param int $quantity
     * @param string $shipDate
     * @param string $status
     * @param bool $complete
     */
    public function __construct(int $id, int $petID, int $quantity, string $shipDate, string $status, bool $complete)
    {
        $this->id = $id;
        $this->petID = $petID;
        $this->quantity = $quantity;
        $this->shipDate = $shipDate;
        $this->status = $status;
        $this->complete = $complete;
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
     * @return int
     */
    public function getPetID(): int
    {
        return $this->petID;
    }

    /**
     * @param int $petID
     */
    public function setPetID(int $petID): void
    {
        $this->petID = $petID;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getShipDate(): string
    {
        return $this->shipDate;
    }

    /**
     * @param string $shipDate
     */
    public function setShipDate(string $shipDate): void
    {
        $this->shipDate = $shipDate;
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
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->complete;
    }

    /**
     * @param bool $complete
     */
    public function setComplete(bool $complete): void
    {
        $this->complete = $complete;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'        => $this->getId(),
            'petID'     => $this->getPetID(),
            'quantity'  => $this->getQuantity(),
            'shipDate'  => $this->getShipDate(),
            'status'    => $this->getStatus(),
            'complete'  => $this->isComplete()

        ];
    }

    /**
     * @param array $command
     * @return OrderAPetFromStoreCommand
     */
    public static function deserialize(array $command): OrderAPetFromStoreCommand
    {
        Assert::lazy()
            ->that($command, null)
            ->tryAll()
            ->keyExists('id', 'id is required')
            ->keyExists('petID', 'petID is required')
            ->keyExists('quantity', 'quantity is required')
            ->keyExists('shipDate', 'shipDate is required')
            ->keyExists('status', 'status is required')
            ->keyExists('complete', 'complete is required')

            ->verifyNow();

        return new OrderAPetFromStoreCommand(
            $command['id'],
            $command['petID'],
            $command['quantity'],
            $command['shipDate'],
            $command['status'],
            $command['complete']

        );
    }


}