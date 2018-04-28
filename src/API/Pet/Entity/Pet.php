<?php

namespace App\API\Pet\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * @ORM\Entity
 * @ORM\Table(name="pet")
 */
class Pet
{
    const  STATUS = ['available', 'pending', 'sold'];

    /**
     * @var int $id
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int $category
     * @ORM\Column(type="integer")
     * @OneToOne(targetEntity="category_pet")
     * @JoinColumn(name="category_pet_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string $name
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var string $photoUrls
     * @ORM\Column(type="string", length=255)
     */
    private $photoUrls;

    /**
     * @var int $tags
     * @ORM\Column(type="integer")
     */
    private $tags;

    /**
     * @var int $status
     * @ORM\Column(type="integer")
     * @OneToOne(targetEntity="status_pet")
     * @JoinColumn(name="status_pet_id", referencedColumnName="id")
     */
    private $status;

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
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory(int $category): void
    {
        $this->category = $category;
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
    public function getPhotoUrls(): string
    {
        return $this->photoUrls;
    }

    /**
     * @param string $photoUrls
     */
    public function setPhotoUrls(string $photoUrls): void
    {
        $this->photoUrls = $photoUrls;
    }

    /**
     * @return int
     */
    public function getTags(): int
    {
        return $this->tags;
    }

    /**
     * @param int $tags
     */
    public function setTags(int $tags): void
    {
        $this->tags = $tags;
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
}
