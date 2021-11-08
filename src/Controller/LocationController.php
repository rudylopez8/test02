<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Location;
use App\Repository\LocationRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

     /**
     * @Route("/location")
     */
    

class LocationController extends AbstractController
{
    /**
     * @Route("/newlocation", name="nouvellocation")
    */
        // Ici on Fait une Enregistrement avec une Formulaire
        public function pageForm(Request $request, EntityManagerInterface $manager)
    {
        $location =new Location(); // Instanciation

        // Creation de mon Formulaire
        $form = $this->createFormBuilder($location) 
                    ->add('date')
                    ->add('titre')
                    ->add('categorie')
                    ->add('image')
                    ->add('description')
                    ->add('valeur')
                    ->add('adresse')
                    ->add('accessibility')
                    ->add('statuts')
                    ->add('alaune')
                                        
            // Demande le résultat
            ->getForm();

        // Analyse des Requetes & Traitement des information 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($location); 
            $manager->flush();

            return $this->redirectToRoute('nouvellocation', 

            ['id'=>$location->getId()]); // Redirection vers la page
        }
       
        // Redirection du Formulaire vers le TWIG pour l’affichage avec
        return $this->render('location/new2.html.twig', [
            'formLocation' => $form->createView()
        ]);
    }


    /**
     * @Route("/locationindex", name="locationindex")
     */

    public function index(): Response
    {
        $repo= $this->getDoctrine()->getRepository(Location::class);
        $location = $repo->findAll();
    
        return $this->render('location/index.html.twig', [
            'controller_name' => 'LocationController',
            'location' => $location,

        ]);
    }
    /**
     * @Route("/{id}", name="affichagelocation", methods={"GET"})
     */
    public function show(Location $Location, LocationRepository $LocationRepository, Request $request, EntityManagerInterface $manager ): Response
    {
        return $this->render('location/show.html.twig', [
            'id'=>$Location->getId(),
            'Location' => $Location,
        ]);
    }


}
