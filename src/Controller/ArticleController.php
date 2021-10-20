<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {

        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',

        ]);
    }
     /**
     * @Route("/Article", name="view_Article")
     */
    public function Article(): Response
    {
        return $this->render('article/Article.html.twig', [        
        ]);
    } 
}
