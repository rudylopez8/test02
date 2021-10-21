<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        
        for ($i=0; $i<20 ; $i++ ) 
        { 
            $articles = new Articles();
            
            $articles->setTitre(" Titre de l'article N°$i ")
                    ->setContenu(" Contenu de l'article N° $i ")   
                    ->setDate(new \DateTime());            
            $manager->persist($articles);
        }
     $manager->flush();
    }
}
