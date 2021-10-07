<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeffaultController extends AbstractController
{
    public function apropos(): Response
    {
        return $this->render('home/apropos.html.twig', [
            'controller_name' => 'DeffaultController',
        ]);
    }
  
}