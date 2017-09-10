<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="main_homepage")
     */
    public function indexAction()
    {
        return $this->render('MainBundle:Default:index.html.twig');
    }

    /**
     * @Route("/media", name="main_media")
     */
    public function mediaAction()
    {
        return $this->render('MainBundle:Default:media.html.twig');
    }

    /**
     * @Route("/marque", name="main_marque")
     */
    public function marqueAction()
    {
        return $this->render('MainBundle:Default:marque.html.twig');
    }
}
