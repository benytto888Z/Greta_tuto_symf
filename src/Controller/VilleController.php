<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VilleController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */
    public function index(): Response
    {
        return $this->render('ville/accueil.html.twig');
    }

    /**
     * @Route("/villes", name="villes")
     */
    public function villes(): Response
    {
        return $this->render('ville/villes.html.twig');
    }

    /**
     * @Route("/ville/musees", name="musees-ville")
     */
    public function musees_ville(): Response
    {
        return $this->render('ville/musee_villes.html.twig');
    }
}
