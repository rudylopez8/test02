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
     * @Route("/{id}", name="articles_affichage", methods={"GET"})
     */
    public function show(Request $request, ArticlesRepository $articlesRepository, EntityManager $manager, Articles $articles ): Response
    {
        return $this->render('article/show.html.twig', [
            'id'=>$articles->getId(),
            'articles' => $articles,
        ]);
    }





}
