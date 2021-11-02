<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/User")
     */

class UserController extends AbstractController
{
    /**
     * @Route("/", name="User_index")
     */

    public function index(): Response
    {
        $repo= $this->getDoctrine()->getRepository(User::class);
        $User = $repo->findAll();
    
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user,

        ]);
    }

}
