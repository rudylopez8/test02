<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateurs;
use App\Repository\UtilisateursRepository;

use Faker;

class UtilisateursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

    for ($i=0; $i<8 ; $i++ ) 
    { 
        $utilisateurs = new Utilisateurs();
        $rol=["proprietaire", "gestionaire", "locataire", "admin"];
shuffle($rol);
        $utilisateurs->setNom(" nom $i")
        ->setPrenom(" prenom $i")
        ->setPhoto(" photo $i")
        ->setDatedenaissance(new  \DateTime())
        ->setLogin(" login $i")
        ->setPass(" password $i")
        ->setAdresse(" $i rue de gery")
        ->setEmail(" mail $i")
        ->setRole($rol[0]);


        $manager->persist($utilisateurs);
    }

 $manager->flush();
}




}
