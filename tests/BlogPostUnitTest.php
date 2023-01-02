
<?php

namespace  App\Tests;

use App\Entity\BlogPost;
use DateTime;
use PHPUnit\Framework\TestCase;



class BlogpostUnitTest extends TestCase
{  
        
 public function testIsTrue()

{
    $blogpost = new BlogPost();
    $datetime = new DateTime();

    $blogpost->setTitre(('titre'))
             ->setCreatedAt($datetime)
             ->setContenue('contenue')
             ->setSlug('slug');

    $this->assertTrue($blogpost->getTitre() ==='titre');
    $this->assertTrue($blogpost->getCreatedAt() ===$datetime);
    $this->assertTrue($blogpost->getContenue() ==='contenue');
    $this->assertTrue($blogpost->getSlug() ==='slug');
    
}

public function testIsFalse()
{
    $blogpost =new BlogPost();
    $datetime = new DateTime();

    $blogpost->setTitre(('titre'))
    ->setCreatedAt($datetime)
    ->setContenue('contenue')
    ->setSlug('slug');


    $this->assertFalse($blogpost->getTitre() ==='false');
    $this->assertFalse($blogpost->getCreatedAt() ===new Datetime());
    $this->assertFalse($blogpost->getContenue() ==='false');
    $this->assertFalse($blogpost->getSlug() ==='false');
       

}

public function testIsEmpty()
{
    $blogpost =new BlogPost();
    

    $this->assertEmpty($blogpost->getTitre());
    $this->assertEmpty($blogpost->getCreatedAt());
    $this->assertEmpty($blogpost->getContenue());
    $this->assertEmpty($blogpost->getSlug());



}




}
