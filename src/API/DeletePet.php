<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:13
 */

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DeletePet
 * @package App\API
 * @Route("/pet/{petID", name="api_key",methods={"DELETE"})
 */
class DeletePet
{
    /**
     * @return JsonResponse
     */
    public function  __invoke():JsonResponse
    {
       return new JsonResponse("delete a pet");
    }

}