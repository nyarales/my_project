<?php

namespace App\Tests;

use App\Entity\Commentaire;
use App\Entity\BlogPost;
use App\Entity\Peinture;
use Datetime;
use PHPUnit\Framework\TestCase;


class CommentaireUnitTest extends TestCase
{

 public function TestIsTrue(){


    $commentaire = new Commentaire();
    $datetime= new Datetime();
    $blogpost= new Blogpost();
    $peinture=new Peinture;

    $commentaire->setAuteur('auteur');
                $commentaire -> setEmail('email@test.com');
                $commentaire ->setCreatedAt ($datetime);
                $commentaire->setContenue('contenue');
                 $commentaire->setBlogpost($blogpost);
                 $commentaire->setPeinture($peinture);


     $this->assertTrue($commentaire->getAuteur()==='auteur');
     $this->assertTrue($commentaire->getEmail()==='email@test.com');
     $this->assertTrue($commentaire->getCreatedAt()===$datetime);
     $this->assertTrue($commentaire->getContenue()==='contenue');
     $this->assertTrue($commentaire->getBlogPost()===$blogpost);
     $this->assertTrue($commentaire->getPeinture()===$peinture);
         
 }


 public function TestIsFalse(){


    $commentaire = new Commentaire();
    $datetime= new Datetime();
    $blogpost= new Blogpost();
    $peinture=new Peinture;

    $commentaire->setAuteur('false');
     $commentaire-> setEmail('false@test.com');
     $commentaire ->setCreatedAt (new Datetime());
     $commentaire ->setContenue('false');
     $commentaire->setBlogpost(new BlogPost());
     $commentaire ->setPeinture(new Peinture());

        


        $this->assertFalse($commentaire->getAuteur()==='false');
        $this->assertFalse($commentaire->getEmail()==='false');
        $this->assertFalse($commentaire->getCreatedAt()==='false');
        $this->assertFalse($commentaire->getContenue()==='false');
        $this->assertFalse($commentaire->getBlogpost()==='false');
        $this->assertFalse($commentaire->getPeinture()==='false');


         
 }


  public function TestIsEmpty()
{
    $commentaire = new Commentaire();
    

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getContenue());
        $this->assertEmpty($commentaire->getBlogpost());
        $this->assertEmpty($commentaire->getPeinture());
        











  }









}
   
