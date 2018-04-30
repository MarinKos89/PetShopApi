<?php


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
     * @var int $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $status
     */
    private $status;


    /**
     * @var int $category
     */
    private $category;

    /**
     * @var string $photoUrls
     */
    private $photoUrls;

    /**
     * @var int $tags
     */
    private $tags;

    /**
     * ByStatusFindPetCommand constructor.
     * @param int $id
     * @param string $name
     * @param string $status
     * @param int $category
     * @param string $photoUrls
     * @param int $tags
     */
    public function __construct(int $id, string $name, string $status, int $category, string $photoUrls, int $tags)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->photoUrls = $photoUrls;
        $this->tags = $tags;
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
            'id' => $this->getId(),
            'category' => $this->getCategory(),
            'name' => $this->getName(),
            'photoUrls' => $this->getPhotoUrls(),
            'tags' => $this->getTags(),
            'status' => $this->getStatus(),

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
            ->keyExists('category', 'category is required')
            ->keyExists('name', 'name is required')
            ->keyExists('photoUrls', 'photoUrls is required')
            ->keyExists('tags', 'tags is required')
            ->keyExists('status', 'status is required')
            ->verifyNow();

        return new ByStatusFindPetCommand(
            $byStatusFindPet['id'],
            $byStatusFindPet['category'],
            $byStatusFindPet['name'],
            $byStatusFindPet['photoUrls'],
            $byStatusFindPet['tags'],
            $byStatusFindPet['status']
        );

    }


}