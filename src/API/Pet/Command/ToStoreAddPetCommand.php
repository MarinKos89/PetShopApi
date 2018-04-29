<?php


namespace App\API\Pet\Command;

use Assert\Assert;

class ToStoreAddPetCommand
{

    /**
     * @var int
     */
    private $category;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $photoUrls;

    /**
     * @var int
     */
    private $tags;

    /**
     * @var string
     */
    private $status;

    /**
     * ToStoreAddPetCommand constructor.
     * @param int $category
     * @param string $name
     * @param string $photoUrls
     * @param int $tags
     * @param string $status
     */
    public function __construct(int $category, string $name, string $photoUrls, int $tags, string $status)
    {
        $this->category = $category;
        $this->name = $name;
        $this->photoUrls = $photoUrls;
        $this->tags = $tags;
        $this->status = $status;
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function toArray():array
    {
        return[
            'category'  => $this->getCategory(),

            'name'  => $this->getName(),

            'photoUrls'  => $this->getPhotoUrls(),

            'tags'  => $this->getTags(),

            'status'  => $this->getStatus()
        ];
    }

    /**
     * @param array $command
     * @return ToStoreAddPetCommand
     */
    public static function deserialize(array $command): ToStoreAddPetCommand
    {

        Assert::lazy()
            ->that($command,null)
            ->tryAll()
            ->keyExists('category','category is required')

            ->keyExists('name','name is required')

            ->keyExists('photoUrls','photoUrls is required')

            ->keyExists('tags','tags is required')

            ->keyExists('status','status is required')

            ->verifyNow();

        return new ToStoreAddPetCommand(
            $command['category'],
            $command['name'],
            $command['photoUrls'],
            $command['tags'],
            $command['status']
        );
    }


}