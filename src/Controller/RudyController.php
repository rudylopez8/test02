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
     * @Route("/programme2", name="programme2")
     */
    public function 
    direct()
    {
        return $this->redirectToRoute('index_programme');
    }
     /**
     * @Route("/essey1", name="essey1")
     */
    public function essey1()
    {
        return $this->redirectToRoute("essey2");
    } 
     /**
     * @Route("/essey2", name="essey2")
     */
    public function essey2()
    {
        return $this->redirectToRoute("essey3");
    } 
     /**
     * @Route("/essey3", name="essey3")
     */
    public function essey3()
    {
        return $this->redirectToRoute("essey4");
    } 
     /**
     * @Route("/essey4", name="essey4")
     */
    public function essey4()
    {
        return $this->redirectToRoute("rudy");
    } 





}
