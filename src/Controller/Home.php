<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController{
    #[Route('/pages/home', name:'home')]
    public function index(){
        return $this->render('/pages/home.html.twig');
    }
}
