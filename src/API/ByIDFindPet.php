<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 18.4.2018.
 * Time: 19:51
 */

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ByIDFindPet
 * @package App\API
 * @Route("pet/{petID}",name="petID",methods={"GET"})
 */
class ByIDFindPet
{

    /**
     * @param int $petID
     * @return JsonResponse
     */
    public function __invoke($petID):JsonResponse
    {
        return new JsonResponse("id ".$petID);
    }
}