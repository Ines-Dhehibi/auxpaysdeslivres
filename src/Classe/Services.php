<?php
namespace App\Classe;
use App\Entity\SiteInfo;
use Doctrine\ORM\EntityManagerInterface;
class Services
{
     private $em;
     public function __construct(EntityManagerInterface $em)
     {
          $this->em = $em;
     }
     public function getLogo()
     {
          return $this->em->getRepository(SiteInfo::class)->findAll();
     }
}