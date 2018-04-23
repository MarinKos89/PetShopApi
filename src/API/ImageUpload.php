<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:15
 */

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ImageUpload
 * @package App\API
 * @Route("/pet/{petID}/uploadImage",name="petID", methods={"POST"})
 */
class ImageUpload
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return  new JsonResponse("upload a image");
    }
}