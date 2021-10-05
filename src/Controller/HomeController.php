<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function accueil()
    {
        return $this->render('home/accueil.html', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    /** 
     *@Route("/programme", name="index_programme") 
    */


    public function programme(){

    return $this->render('home/programme.html.twig',
    ['controller_name'=> 'HomeController',
    ]);
}

   


}
