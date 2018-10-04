<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 04/10/18
 * Time: 14:33
 */

namespace App\Controller;




use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Yo ca marche");
    }


    /**
     * @Route("/news/{name}")
     */
    public function show($name)
    {
        return new Response(sprintf(
            'Future page to show the article: %s',
            $name
        ));
    }

}