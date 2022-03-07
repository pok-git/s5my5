<?php

namespace App\Controller;


use App\Repository\ProductRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



class DefaultController  extends AbstractController
{




    /**
     * @Route("/", name="homepage")
     */
    public function homepage(Request $request , SkillRepository $skillRepository): Response
    {
        $skills = $skillRepository->findAll();

        return $this->render('homepage.html.twig', [
            'skills' => $skills,
        ]);
    }





}
