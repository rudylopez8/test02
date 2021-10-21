<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ArticlesType;
use Symfony\Component\HttpFoundation\Request;

/**
     * @Route("/articles")
     */
    

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="articles_index")
     */

    public function index(): Response
    {
        $repo= $this->getDoctrine()->getRepository(Articles::class);
        $articles = $repo->findAll();
    
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles,

        ]);
    }
    /**
     * @Route("/new", name="articles_nouveau", methods={"GET", "POST"})
     */
    public function nouveau(Request $request, EntityManagerInterface $em): Response
    {

       $articles = new Articles();

       // Ici je fais un enregistrement Manuel, on verra la suite avec le  Formulaire
       $articles->setTitre(" Titre de mon Article");
       $articles->setImage(" photo de mon Article");
       $articles->setResume(" Titre de mon Article");
       $articles->setDate(new  \DateTime());
       $articles->setContenu(" Contenu de mon Article Contenu de mon ArticleContenu de mon ArticleContenu de mon ArticleContenu de mon Article");

       // Je persiste Mon Enregistrement
       $em->persist($articles);
       $em->flush();

       // J'envoie au niveau du temple pour l'enregistrement
       return $this->render('article/new.html.twig', [
           'articles' => $articles,
       ]);

    }

 /**
     * @Route("/{id}", name="articles_affichage", methods={"GET"})
     */
    public function show(Articles $articles, ArticlesRepository $articlesRepository, Request $request, EntityManagerInterface $manager ): Response
    {
        return $this->render('article/show.html.twig', [
            'id'=>$articles->getId(),
            'articles' => $articles,
        ]);
    }


   


}
