<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
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
        // return new Response(sprintf(
        //     'Future page to show the article: "%s"',
        //     $slug
        // ));
    	
    	$comments = [
    	    'I ate a normal rock once. It did NOT taste like bacon!',
    	    'Woohoo! I\'m going on an all-asteroid diet!',
    	    'I like bacon too! Buy some from my site! bakinsomebacon.com',
    	];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }    
}
