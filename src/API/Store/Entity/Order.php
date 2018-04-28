<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="store")
 */
class Order
{


    /**
     * var int $id
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * var int $petID
     * @ORM\Column(type="integer")
     */
    private $petID;

    /**
     * var int $quantity
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * var datetime $shipDate
     * @ORM\Column(type="datetime")
     */
    private $shipDate;

    /**
     * var int $status
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * var boolean $complete
     * @ORM\Column(type="boolean" )
     */
    private $complete = false;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPetID()
    {
        return $this->petID;
    }

    /**
     * @param mixed $petID
     */
    public function setPetID($petID): void
    {
        $this->petID = $petID;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }

    /**
     * @param mixed $shipDate
     */
    public function setShipDate($shipDate): void
    {
        $this->shipDate = $shipDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * @param mixed $complete
     */
    public function setComplete($complete): void
    {
        $this->complete = $complete;
    }


}
