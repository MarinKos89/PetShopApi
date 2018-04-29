<?php

namespace App\API\Pet\Command;

use Assert\Assert;

class ByIDFindPetCommand
{
    /**
     * @var int $petID
     */
    private $petID;

    /**
     * ByIDFindPetCommand constructor.
     * @param $petID
     */
    public function __construct(
        $petID
    )
    {
        $this->petID = $petID;
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
     * @return array
     */
    public function toArray(): array
    {
        return [
            'petID' => $this->getPetID()
        ];
    }


    /**
     * @param int $petID
     * @return ByIDFindPetCommand
     */
    public static function deserialize(int $petID): ByIDFindPetCommand
    {
        return new ByIDFindPetCommand($petID);

    }
}