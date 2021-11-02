<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Faker;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i=0; $i<8 ; $i++ ) 
        { 
            $categorie = new Categorie();
            $categorie->setTitre(" Titre categorie $i");
            $categorie->setResume(" Resume de Categorie $i");
     
            
            $manager->persist($categorie);
        }

     $manager->flush();
    }



}
