<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CarsController extends Controller
{
    /**
     * @Route("/cars/show")
     */
    public function showAction()
    {
        return $this->render('CarBundle:Cars:show.html.twig', array(
            // ...
        ));
    }

}
