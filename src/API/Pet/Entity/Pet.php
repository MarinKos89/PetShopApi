<?php

namespace App\API\Pet\Entity;

use App\Entity\Category;
use App\Entity\StatusPet;
use App\Entity\Tag;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pet")
 */
class Pet
{
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
     * @var Tag $tags
     * @ORM\Column(type="integer")
     */
    private $tags;

    /**
     * @var StatusPet $status
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

//    /**
//     * @return string
//     */
//    public function getCategory(): string
//    {
//        return $this->category->getName();
//    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
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
     * @return string
     */
    public function getTags(): string
    {
        return $this->tags;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}
