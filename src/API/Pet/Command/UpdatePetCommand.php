<?php


namespace App\API\Pet\Command;


use Assert\Assert;

class UpdatePetCommand
{

    /**
     * @var int
     */
    private $id;

    private $category;

    /**
     * @var string
     */
    private $name;

    /**
     * UpdatePetCommand constructor.
     * @param int $id
     * @param $category
     * @param string $name
     * @param string $photoUrls
     * @param int $tags
     * @param int $status
     */
    public function __construct(int $id, $category, string $name, string $photoUrls, int $tags, int $status)
    {
        $this->id = $id;
        $this->category = $category;
        $this->name = $name;
        $this->photoUrls = $photoUrls;
        $this->tags = $tags;
        $this->status = $status;
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
     * @var string
     */
    private $photoUrls;

    /**
     * @var int
     */
    private $tags;

    /**
     * @var int
     */
    private $status;



    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
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

    /**
     * @return array
     */
    public function toArray(): array
    {

        return [

            'id' => $this->getCategory(),

            'category' => $this->getCategory(),

            'name' => $this->getName(),

            'photoUrls' => $this->getPhotoUrls(),

            'tags' => $this->getTags(),

            'status' => $this->getStatus()

        ];
    }

    /**
     * @param array $updatepet
     * @return UpdatePetCommand
     */
    public static function deserialize(array $updatepet): UpdatePetCommand
    {

        Assert::lazy()
            ->that($updatepet, null)
            ->tryAll()
            ->keyExists('id', 'id is required')
            ->keyExists('category', 'category is required')
            ->keyExists('name', 'name is required')
            ->keyExists('photoUrls', 'photoUrls is required')
            ->keyExists('tags', 'tags is required')
            ->keyExists('status', 'status is required')
            ->verifyNow();

        return new UpdatePetCommand(
            $updatepet['id'],
            $updatepet['category'],
            $updatepet['name'],
            $updatepet['photoUrls'],
            $updatepet['tags'],
            $updatepet['status']
        );
    }


}