<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/vue")
     */

class VueController extends AbstractController
{
    /**
     * @Route("/default", name="vue")
     */
    public function index(): Response
    {
        return $this->render('VueController/index.html.twig', [
            'controller_name' => 'VueController',
        ]);
    }
    /**
     * @Route("/info", name="index_info")
     */

    public function info()
    {
      return new Response("VueController");
    }



    // affiche le contenu d’un Eleement du tableau 
    // tableau[’idColonne’] }} affiche le contenu d’un el ´ ement du tableau 
    // est l’equivalent de ´ <?php echo $tableau[’idColonne’]; 

    /**
     * @Route("/tableau", name="view_tableaux")
     */
    public function tables(): Response
    {
        // J'initialise mon tableau   
        $tab = [10, 15, 18];

        // J'appelle la vue TABLEAUX/TWIG
        return $this->render('VueController/tableaux.html.twig', [
        
        // J'affiche Mon tableau
    
        'cours_name' => 'COMPOSANTE VUE',
        'tableau' => $tab,
        ]);
    } 

}
