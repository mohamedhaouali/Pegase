<?php

namespace Myapp\GestionProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionProjetBundle:Default:index.html.twig');
    }
    
         public function acceuilAction()
    {
        return $this->render('GestionProjetBundle:Default:acceuil.html.twig');
    }
}
