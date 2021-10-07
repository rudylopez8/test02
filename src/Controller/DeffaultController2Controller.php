<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeffaultController2Controller extends AbstractController
{
    /**
     * @Route("/deffault/controller2", name="deffault_controller2")
     */
    public function index(): Response
    {
        return $this->render('deffault_controller2/index.html.twig', [
            'controller_name' => 'DeffaultController2Controller',
        ]);
    }
}
