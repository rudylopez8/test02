<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RudyController extends AbstractController
{
    /**
     * @Route("/rudy", name="rudy")
     */
    public function index(): Response
    {
        return $this->render('rudy/index.html.twig', [
            'controller_name' => 'RudyController',
        ]);
    }

    // REDIRECTION
    // return $this->redirectToRoute('homepage');
    /**
     * @Route("/redirect", name="programme2")
     */
    public function 
    direct()
    {
        return $this->redirectToRoute('index_programme');
    }





}
