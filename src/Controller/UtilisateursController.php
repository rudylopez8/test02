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
     * @Route("/", name="indexUtilisateur2")
     */
    public function index(): Response
    {
        $repo= $this->getDoctrine()->getRepository(Utilisateurs::class);
        $utilisateurs = $repo->findAll();
    
        return $this->render('utilisateurs/index.html.twig', [
            'Utilisateurs' => $utilisateurs,

        ]);
    }

}
