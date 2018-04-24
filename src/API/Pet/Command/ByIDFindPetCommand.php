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
     * pojasniti što?
     * a ono,da
     * assert je validator koji ima razne mogućnosti, pogledaj si na netu ima svašta
     * ovdje smo mu rekli da mora biti petID ponjen ili se dalje ne može
     * on prekine svaku radnju
     * lazy se odnosi na lazy loading, znači ne učitava se dok ga se ne pozove
     * ok
     * sad ćemo dodati i dio koji će automacki vidjeti postoji li takav key i zato moramo malo promjeniti ovu funkciju
     * kako bi bila primjenjiva na polje
     * ubuduće će ti ovo obraditi sve key value parove
     *
     */
    public static function deserialize(int $petID): ByIDFindPetCommand
    {
        return new ByIDFindPetCommand($petID);
//        Assert::lazy()
//            ->that($command, null)
//            ->tryAll()
//            ->keyExists('petID', 'petID mora biti poslan')
//            ->verifyNow();
//
//        return new ByIDFindPetCommand(
//            $this->petID
//        );
    }
}