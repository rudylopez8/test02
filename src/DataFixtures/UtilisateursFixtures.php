<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class UtilisateursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

    for ($i=0; $i<8 ; $i++ ) 
    { 
        $utilisateurs = new Utilisateurs();
        $utilisateurs->setNoms(" nom $i");
        $utilisateurs->setPrenoms(" Prenom $i");
        $utilisateurs->setPhoto(" photo $i");
        $utilisateurs->setDateNaissance(new  \DateTime());
        $utilisateurs->setLogin(" login $i");
        $utilisateurs->setPassword(" password $i");
        $utilisateurs->setAdresse(" $i rue de gery");
        $utilisateurs->setEmail(" nom@ $i");
        $utilisateurs->setRôle(" user");
        $utilisateurs->setLocataires(true);
        $utilisateurs->setProprietaires(false);
        $utilisateurs->setGestionaires(false);
        $utilisateurs->setAdministrateurs(false);


        $utilisateurs->setLogin(" login $i");
        
        $manager->persist($categorie);
    }

 $manager->flush();
}




}
