<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BbqController extends AbstractController
{
    /**
     * @Route("/bbq", name="bbq")
     */
    public function index(): Response
    {
        return $this->render('bbq/index.html.twig', [
            'controller_name' => 'BbqController',
        ]);
    }
     /**
     * @Route("/Accueil", name="Accueil")
     */
    public function Accueil(): Response
    {
        return $this->render('bbq/Accueil.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Apropos", name="Apropos")
     */
    public function Apropos(): Response
    {
        return $this->render('bbq/Apropos.html.twig', [        
        ]);
    } 
     /**
     * @Route("/LesLivres", name="LesLivres")
     */
    public function LesLivres(): Response
    {
        return $this->render('bbq/LesLivres.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Leslocations", name="Leslocations")
     */
    public function Leslocations(): Response
    {
        return $this->render('bbq/Leslocations.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Documentations", name="Documentations")
     */
    public function Documentations(): Response
    {
        return $this->render('bbq/Documentations.html.twig', [        
        ]);
    } 
     /**
     * @Route("/NousContacter", name="NousContacter")
     */
    public function NousConctacter(): Response
    {
        return $this->render('bbq/NousConctacter.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Connexion", name="Connexion")
     */
    public function Connexion(): Response
    {
        return $this->render('bbq/Connexion.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Administration", name="Administration")
     */
    public function Administration(): Response
    {
        return $this->render('bbq/Administration.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Systeme", name="Systeme")
     */
    public function Systeme(): Response
    {
        return $this->render('bbq/Systeme.html.twig', [        
        ]);
    } 
     /**
     * @Route("/ArticlealaUNE", name="ArticlealaUNE")
     */
    public function ArticlealaUNE(): Response
    {
        return $this->render('bbq/ArticlealaUNE.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Categorie", name="Categorie")
     */
    public function Categorie(): Response
    {
        return $this->render('bbq/Categorie.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Contenu", name="Contenu")
     */
    public function Contenu(): Response
    {
        return $this->render('bbq/Contenu.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Extensions", name="Extensions")
     */
    public function Extensions(): Response
    {
        return $this->render('bbq/Extensions.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Images", name="Images")
     */
    public function Images(): Response
    {
        return $this->render('bbq/Images.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Logout", name="Logout")
     */
    public function Logout(): Response
    {
        return $this->render('bbq/Logout.html.twig', [        
        ]);
    } 
     /**
     * @Route("/Utilisateurs", name="Utilisateurs")
     */
    public function Utilisateurs(): Response
    {
        return $this->render('bbq/Utilisateurs.html.twig', [        
        ]);
    } 



}
