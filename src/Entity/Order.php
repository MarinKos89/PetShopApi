<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 18.4.2018.
 * Time: 22:10
 */

namespace App\Controller\Entity;


class Order
{
    /**
     * @var int64 $id
     */
    protected $id;
    /**
     * @var int64 $petId
     */
    protected $petId;
    /**
     * @var string $shipDate
     */
    protected $shipDate;
    /**
     * @var string $status
     */
    protected $status;
    /**
     * @var bool $complete
     */
    protected $complete=false;

    /**
     * @return int64
     */
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
     * @return int64
     */
    public function getPetId(): int64
    {
        return $this->petId;
    }

    /**
     * @param int64 $petId
     */
    public function setPetId(int64 $petId): void
    {
        $this->petId = $petId;
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




}