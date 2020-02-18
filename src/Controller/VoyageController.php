<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoyageController extends AbstractController{
    /**
     * @Route("/voyages",name="voyage_index",methods={"GET"})
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        $article = json_encode(["title"=>'toto',"content"=>[json_encode(["type"=>"paragraphe","id"=>5]),json_encode(["type"=>"paragraphe","id"=>5])]]);
        dump($article);
        dump(json_decode($article));
        exit();
        return $this->render('Voyage/index.html.twig');
    }
}