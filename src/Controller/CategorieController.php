<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\CategorieType;
use Symfony\Component\HttpFoundation\Request;

    /**
     * @Route("/categorie")
     */

class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="categorie")
     */
    public function index(): Response
    {
        $repo= $this->getDoctrine()->getRepository(Categorie::class);
        $categorie = $repo->findAll();
    
        return $this->render('Categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
            'categorie' => $categorie,

        ]);
    }
    /**
     * @Route("/newcategorie", name="categorie_nouveau", methods={"GET", "POST"})
     */
    public function nouveau(Request $request, EntityManagerInterface $em): Response
    {

       $categorie = new Categorie();

       $categorie->setTitre(" Titre de ma Categorie");
       $categorie->setResume(" resume de ma Categorie");

       $em->persist($categorie);
       $em->flush();

       return $this->render('categorie/new.html.twig', [
           'categorie' => $categorie,
       ]);

    }

 /**
     * @Route("/{id}", name="affichageCategorie", methods={"GET"})
     */
    public function show(Categorie $categorie, CategorieRepository $categorieRepository, Request $request, EntityManagerInterface $manager ): Response
    {
        return $this->render('categorie/show.html.twig', [
            'id'=>$categorie->getId(),
            'categorie' => $categorie,
        ]);
    }


   

}
