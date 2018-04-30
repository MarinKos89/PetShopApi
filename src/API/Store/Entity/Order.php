<?php

namespace App\API\Store\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="store")
 */
class Order
{
    /**
     * @var int $id
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int $id
     * @ORM\Column(type="integer")
     */
    private $petID;

    /**
     * @var int $quantity
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @var string $shipDate
     * @ORM\Column(type="string", length=255)
     */
    private $shipDate;

    /**
     * @var string $status
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @var bool $complete
     * @ORM\Column(type="boolean")
     */
    private $complete;

    public function getId()
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



    public function getPetID(): ?int
    {
        return $this->petID;
    }

    public function setPetID(int $petID): self
    {
        $this->petID = $petID;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getShipDate(): ?string
    {
        return $this->shipDate;
    }

    public function setShipDate(string $shipDate): self
    {
        $this->shipDate = $shipDate;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getComplete(): ?bool
    {
        return $this->complete;
    }

    public function setComplete(bool $complete): self
    {
        $this->complete = $complete;

        return $this;
    }


}
