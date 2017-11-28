<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CommentaireController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('AppBundle:Commentaire:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Commentaire:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Commentaire:delete.html.twig', array(
            // ...
        ));
    }

}
