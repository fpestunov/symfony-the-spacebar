<?php

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
        return new Response('OMG! My first page already! WOOO!');
    }

    /**
     * @Route("/about/company")
     */
    public function about()
    {
        return new Response('Future page to show about company info.');
    }
    
    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }    
}
