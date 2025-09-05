<?php
// src/Controller/pages/Home.php
namespace App\Controller\pages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController{
    #[Route('/pages/home', name:'home')]
    public function index(){
        return $this->render('/pages/home.html.twig');
    }
}
