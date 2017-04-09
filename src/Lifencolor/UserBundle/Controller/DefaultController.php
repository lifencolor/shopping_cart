<?php

namespace Lifencolor\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LifencolorUserBundle:Default:index.html.twig');
    }
}
