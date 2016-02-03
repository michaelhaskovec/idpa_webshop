<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StartseiteController extends Controller
{
    /**
     * @Route("/", name="startseite")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/Startseite/index.html.twig', [

        ]);
    }
}
