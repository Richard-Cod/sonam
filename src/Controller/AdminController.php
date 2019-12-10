<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/profil/show", name="admin.profil.show")
     */
    public function accueil()
    {
       //$profils= $repo->findAll();
        return $this->render('base.html.twig', [
            'profils' => "moi",
        ]);
    }

  

}
