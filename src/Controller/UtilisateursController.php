<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateurs;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UtilisateursType;
use Symfony\Component\HttpFoundation\Request;


/**
     * @Route("/utilisateurs2")
     */

class UtilisateursController extends AbstractController
{
    /**
     * @Route("/new2utilisateur", name="nouvelutilisateur")
    */
        // Ici on Fait une Enregistrement avec une Formulaire
        public function pageForm(Request $request, EntityManagerInterface $manager)
    {
        $utilisateurs =new Utilisateurs(); // Instanciation

        // Creation de mon Formulaire
        $form = $this->createFormBuilder($utilisateurs) 
                    ->add('nom')
                    ->add('prenom')
                    ->add('login')
                    ->add('pass')
                    ->add('photo')
                    ->add('adresse')
                    ->add('email')
                    ->add('role')
                
            // Demande le résultat
            ->getForm();

        // Analyse des Requetes & Traitement des information 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($utilisateurs); 
            $manager->flush();

            return $this->redirectToRoute('nouvelutilisateur', 

            ['id'=>$utilisateurs->getId()]); // Redirection vers la page
        }
       
        // Redirection du Formulaire vers le TWIG pour l’affichage avec
        return $this->render('utilisateurs/new2.html.twig', [
            'formUtilisateur' => $form->createView()
        ]);
    }




    /**
     * @Route("/", name="indexUtilisateur2")
     */
    public function index(): Response
    {
        $repo= $this->getDoctrine()->getRepository(Utilisateurs::class);
        $utilisateurs = $repo->findAll();
    
        return $this->render('utilisateurs/index.html.twig', [
            'controller_name' => 'UtilisateurController',
            'utilisateurs' => $utilisateurs,

        ]);
    }
    /**
     * @Route("/newUtilisateurs", name="utilisateurs_nouveau", methods={"GET", "POST"})
     */
    public function nouveauUtilisateurs(Request $request, EntityManagerInterface $em): Response
    {

       $utilisateurs = new Utilisateurs();

       $utilisateurs->setNom(" nom");
       $utilisateurs->setPrenom(" prenom");

       $utilisateurs->setPhoto(" photo");
       $utilisateurs->setLogin(" login");
       $utilisateurs->setPass("pass");

       $em->persist($utilisateurs);
       $em->flush();

       return $this->render('utilisateurs/new.html.twig', [
           'utilisateurs' => $utilisateurs,
       ]);

    }
    /**
     * @Route("/{id}", name="affichageUtilisateur", methods={"GET"})
     */
    public function show(Utilisateurs $utilisateurs, UtilisateursRepository $utilisateursRepository, Request $request, EntityManagerInterface $manager ): Response
    {
        return $this->render('utilisateurs/show.html.twig', [
            'id'=>$utilisateurs->getId(),
            'utilisateurs' => $utilisateurs,
        ]);
    }


   



}
