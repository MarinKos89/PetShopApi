<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 18.4.2018.
 * Time: 22:21
 */

namespace App\Controller\Entity;


class Tag
{

    /**
     * @var int64 $id
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

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





}