<?php
/**
 * Created by PhpStorm.
 * User: mkos8
 * Date: 16.4.2018.
 * Time: 23:43
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    /**
     * @Route("/")
     */
    public function homepage(){


        return new Response( "Home page");
    }



}