<?php

namespace Dita\TrackingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DitaTrackingBundle:Default:index.html.twig');
    }
}
