<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 29.4.2018.
 * Time: 0:34
 */

namespace App\API\Store\Command;

/**
 * Class ByIDFindsPurchaseOrderInStoreCommand
 * @package App\API\Store\Command7
 */
class ByIDFindsPurchaseOrderInStoreCommand
{

    /**
     * @var int $id
     */
    private $id;

    /**
     * ByIDFindsPurchaseOrderInStoreCommand constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
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
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId()
        ];
    }


    /**
     * @param int $id
     * @return ByIDFindsPurchaseOrderInStoreCommand
     */
    public static function deserialize(int $id): ByIDFindsPurchaseOrderInStoreCommand
    {
        return new ByIDFindsPurchaseOrderInStoreCommand($id);

    }


}