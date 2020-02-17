<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{
    /**
     * @Route("/",name="home_index",methods={"GET"})
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        return $this->render('Home/index.html.twig');
    }

    /**
     * @Route("/actu",name="home_actu",methods={"GET"})
     * 
     * @param Request $request
     * @return Response
     */
    public function actu(Request $request,EntityManagerInterface $entityManager): Response
    {
        return $this->render('Home/index.html.twig');
    }
}