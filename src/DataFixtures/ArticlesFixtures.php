<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Faker;

class ArticlesFixtures extends Fixture
{

    public function load(ObjectManager $manager): void

    {
     // J'utlise fixtures avec FAKER
      $faker = Faker\Factory::create('fr_FR');

        for ($i=0; $i<20 ; $i++ ) 
        { 
            $articles = new Articles();
            
            $articles->setTitre($faker->sentence())
                    ->setContenu($faker->sentence($nbWords = 20, $variableNbWords = true))    
                    ->setResume($faker->sentence($nbWords = 20, $variableNbWords = true))    
                    ->setImage($faker->sentence($nbWords = 20, $variableNbWords = true))    
                    ->setDate(new \DateTime());
            $manager->persist($articles);
        }

     $manager->flush();
    }


}
