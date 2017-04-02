<?php

namespace Dita\TrackingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Dita\TrackingBundle\Document\Address;
use Dita\TrackingBundle\Form\AddressType;
class AddressController extends Controller
{
    public function listAction(Request $request)
    {
        $addresses = $this->get('doctrine_mongodb')->getManager()->getRepository('DitaTrackingBundle:Address')->findAll();
        $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $addresses, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );
        return $this->render('DitaTrackingBundle:Address:list.html.twig', array('pagination' => $pagination));
    }

    /**
     * @ParamConverter("address", class="Dita\TrackingBundle\Document\Address")
     */
    public function editAction(Address $address, Request $request)
    {
        $form = $this->get('form.factory')->create(AddressType::class,$address);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if($form->get('submit')->isClicked() && $form->isValid())
            {
              $em = $this->get('doctrine_mongodb')->getManager();
              $em->flush();
              return $this->redirectToRoute('address_list');
            }
        }
        return $this->render('DitaTrackingBundle:Address:edit.html.twig', array(
            'form' => $form->createView()
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
