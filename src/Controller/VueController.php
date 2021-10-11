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
     * @Route("/tableaux", name="view_tableaux")
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

        /**
     * @Route("/Affichage", name="view_affichage")
     */
    public function Affichage(): Response
    {
        // J'initialise mes variables   
        $Nom="lopez";
        $Prenom="rudy";

        // J'appelle la vue affichage/TWIG
        return $this->render('VueController/affichage.html.twig', [
        
        // J'affiche Mes variables
        'Nom' => $Nom,
        'Prenom' => $Prenom,

        ]);
    } 
    /**
     * @Route("/ListeEleve", name="view_ListeEleve")
     */
    public function ListeEleve(): Response
    {
        // J'initialise mes tableaux   
        $tab = ["rudy", "valery"];
        $tab2 = ["lopez", "newla"];

        // J'appelle la vue LISTEELEVE/TWIG
        return $this->render('VueController/ListeEleve.html.twig', [
        
        // J'affiche Mes tableaux
    
        'tableau1' => $tab,
        'tableau2' => $tab2,

        ]);

    } 


}
