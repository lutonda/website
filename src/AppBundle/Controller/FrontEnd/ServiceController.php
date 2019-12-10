<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/servicos")
 */
class ServiceController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('front_end/Service/index.html.twig', array('name' => ''));
    }
}
