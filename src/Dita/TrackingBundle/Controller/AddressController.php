<?php

namespace Dita\TrackingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddressController extends Controller
{
    public function listAction()
    {
        // test from commit to 1.0.0
        return $this->render('DitaTrackingBundle:Address:list.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('DitaTrackingBundle:Address:edit.html.twig', array(
            // ...
        ));
    }

    public function showAction()
    {
        return $this->render('DitaTrackingBundle:Address:show.html.twig', array(
            // ...
        ));
    }

    public function removeAction()
    {
        return $this->render('DitaTrackingBundle:Address:remove.html.twig', array(
            // ...
        ));
    }

}
