<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TypeController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('AppBundle:Type:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Type:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Type:delete.html.twig', array(
            // ...
        ));
    }

}
