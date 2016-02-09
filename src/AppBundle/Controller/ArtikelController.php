<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArtikelController extends Controller
{
    /**
     * @Route("/admin/artikel", name="artikel")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $artikeln = $em->getRepository('AppBundle:Artikel')->findAll();


        return $this->render('Backend/Artikel/index.html.twig', [
        "artikeln" => $artikeln
        ]);
    }
}
