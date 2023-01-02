<?php

namespace App\Tests;

use App\Entity\Categorie;
use App\Entity\Peinture;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\Constraint\IsTrue;
use PHPUnit\Framework\TestCase;

class PeintureUnitTest extends TestCase
{  
        
 public function testIsTrue()

{
    $peinture = new Peinture();
    $datetime = new DateTime();
    $categorie=new Categorie();
    $user= new user();

    $peinture->setNom('nom')
         ->setLargeur(20,20)
         ->setHauteur(20,20)
         ->setEnVente(true)
         ->setDateRealisation($datetime)
         ->setDate($datetime)
         ->setDescription('description')
         ->setLargeur(20,20)  
         ->setPortfolio(true)
         ->setSlug('slug')
         ->setFile('file')
         ->addCategorie($categorie)
         ->setPrix(20,20)
         ->setUser($user);



    $this->assertTrue($peinture->getNom() ==='nom');
    $this->assertTrue($peinture->getLargeur() == 20.20);
    $this->assertTrue($peinture->getHauteur() ===20.20);
    $this->assertTrue($peinture->getEnVente() ===true);
    $this->assertTrue($peinture->getDateRealisation() ===$datetime);
    $this->assertTrue($peinture->getDate() ===$datetime);
    $this->assertTrue($peinture->getDescription() ==='description');
    $this->assertTrue($peinture->getPortfolio() === true);
    $this->assertTrue($peinture->getSlug() ==='slug');
    $this->assertTrue($peinture->getFile() ==='file');
    $this->assertTrue($peinture->getPrix() == 20.20 );
    $this->assertContains($categorie, $peinture->getCategorie());
    $this->assertTrue($peinture->getUser() === $user);
  
  
  

}

public function testIsFalse()
{
   
    $peinture = new Peinture();
    $datetime = new DateTime();
    $categorie=new Categorie();
    $user= new user();

    $peinture->setNom('nom')
    ->setLargeur(20,20)
    ->setHauteur(20,20)
    ->setEnVente(true)
    ->setDateRealisation($datetime)
    ->setDate($datetime)
    ->setDescription('description')
    ->setLargeur(20,20)  
    ->setPortfolio(true)
    ->setSlug('slug')
    ->setFile('file')
    ->addCategorie($categorie)
    ->setPrix(20,20)
    ->setUser($user);



    $this->assertFalse($peinture->getNom() ==='false');
    $this->assertFalse($peinture->getLargeur() == 22.20);
    $this->assertFalse($peinture->getHauteur() == 22.20);
    $this->assertFalse($peinture->getEnVente() ===false);
    $this->assertFalse($peinture->getDateRealisation() === new DateTime());
    $this->assertFalse($peinture->getDate() === new DateTime());
    $this->assertFalse($peinture->getDescription() ==='false');
    $this->assertFalse($peinture->getPortfolio() ===false);
    $this->assertFalse($peinture->getSlug() ==='false');
    $this->assertFalse($peinture->getFile() ==='false');
    $this->assertNotContains(new Categorie(),$peinture->getCategorie());
    $this->assertFalse($peinture->getUser() === new User());
       

}

public function testIsEmpty()
{
    $peinture =new Peinture();

    $this->assertFalse($peinture->getNom());
    $this->assertFalse($peinture->getLargeur());
    $this->assertFalse($peinture->getHauteur());
    $this->assertFalse($peinture->getEnVente());
    $this->assertFalse($peinture->getDateRealisation());
    $this->assertFalse($peinture->getDate());
    $this->assertFalse($peinture->getDescription());
    $this->assertFalse($peinture->getPortfolio());
    $this->assertFalse($peinture->getSlug());
    $this->assertFalse($peinture->getFile());
    $this->assertFalse($peinture->getPrix());
    $this->assertFalse($peinture->getCategorie());
    $this->assertFalse($peinture->getUser());



}




}
