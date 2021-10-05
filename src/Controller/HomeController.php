<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function index() : Response
    {
        return $this->render('home/index.html.twig', ['controller_name' => 'HomeController',
    ]);
    }
    /**
     * @Route("/", name="home")
     */

  public function accueil(): Response
  {
      return $this->render('home/accueil.html.twig', [
          'controller_name' => 'HomeController',
      ]);
  }


  public function apropos(): Response
  {
      return $this->render('home/apropos.html.twig', [
          'controller_name' => 'HomeController',
      ]);
  }


  public function contacter(): Response
  {
      return $this->render('home/contacter.html.twig', [
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
 
       
    /** 
     *@Route("/actu", name="index_actu") 
    */


    public function actu(){

        return $this->render('home/actu.html.twig',
        ['controller_name'=> 'HomeController',
        ]);    
}

   


}
