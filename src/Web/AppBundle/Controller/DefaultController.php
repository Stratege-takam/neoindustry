<?php

namespace Web\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="main_app")
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl("main_homepage"));
    }
}
