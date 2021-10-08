<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    // Retourner une réponse
    /**
     * @Route("/salut", name="index_bonjour")
     */
    public function bonjour()
    {
      return new Response("BONJOUR TOUT LE MONDE !");
    }

        // 1- Les paramètres de la requête
            // A - Les paramètres contenus dans les routes 

    
    /**
     * @Route("/article/{id}", name="index_bonjour2")
     */
    public function voirAction($id)
    {
        return new Response("Affichage de l'article d'id : ".$id.".");
    }

    // REDIRECTION
    // return $this->redirectToRoute('homepage');
    /**
     * @Route("/redirect/{id}", name="index_redir")
     */
    public function redirecto($id)
    {
        return $this->redirectToRoute('home');
    }







}
