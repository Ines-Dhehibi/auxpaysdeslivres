<?php

namespace App\Controller;

use App\Entity\SiteInfos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    // public function logo(): Response
    // {
    //     $logo = $this->em->getRepository(SiteInfos::class)->findOneBy();
    //     return $this->render('base.html.twig', [
    //         'logo' => $logo,
    //     ]);
    // }
}
