<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController{
    /**
     * @Route("/new-article",name="article_new",methods={"GET"})
     * 
     * @param Request $request
     * @return Response
     */
    public function new(Request $request,EntityManagerInterface $entityManager): Response
    {
        return $this->render('Article/new.html.twig');
    }

    /**
     * @Route("/new-article-content",name="article_newContent",methods={"POST"})
     * 
     * @param Request $request
     * @return Response
     */
    public function newContent(Request $request,EntityManagerInterface $entityManager): Response
    {
        $dateDebut = $request->get('date_debut');
        $dateFin = $request->get('date_fin');
        $title = $request->get('title');
        return $this->render('Article/creating.html.twig',[
            "date_debut"=>$dateDebut,"date_fin"=>$dateFin,"title"=>$title
        ]);
    }

    /**
     * @Route("/new-article-handler",name="article_handler",methods={"POST"})
     * 
     * @param Request $request
     * @return Response
     */
    public function handler(Request $request,EntityManagerInterface $entityManager): Response
    {
        $article;
        $i = 0;
        $working = true;
        while($working){
            
            

            $working = false;
        }
        $dateDebut = $request->get('date_debut');
        $dateFin = $request->get('date_fin');
        $title = $request->get('title');
        dump($article);
        exit();
        return $this->render('Article/creating.html.twig',[
            "date_debut"=>$dateDebut,"date_fin"=>$dateFin,"title"=>$title
        ]);
    }

}