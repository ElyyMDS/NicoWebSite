<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalerieController extends AbstractController{
    /**
     * @Route("/galerie",name="galerie_index",methods={"GET"})
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        return $this->render('Galerie/index.html.twig');
    }
}