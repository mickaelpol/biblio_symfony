<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UtilisateurController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('AppBundle:Utilisateur:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Utilisateur:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Utilisateur:edit.html.twig', array(
            // ...
        ));
    }

}
