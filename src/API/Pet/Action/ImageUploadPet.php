<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 19.4.2018.
 * Time: 17:15
 */

namespace App\API\Pet\Action;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ImageUploadPet
 * @package App\API\Pet\Action
 * @Route("/pet/{petID}/uploadImage",name="image_upload_pet", methods={"POST"})
 */
class ImageUploadPet
{

    /**
     * @return JsonResponse
     */
    public function __invoke():JsonResponse
    {
        return  new JsonResponse("Will be implemented");
    }
}