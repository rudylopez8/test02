<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Articles2Controller extends AbstractController
{
    /**
     * @Route("/articles2", name="articles2")
     */
    public function index(): Response
    {
        return $this->render('articles2/index.html.twig', [
            'controller_name' => 'Articles2Controller',
        ]);
    }
}
