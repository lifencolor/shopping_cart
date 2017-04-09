<?php

namespace Lifencolor\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LifencolorWebBundle:Default:index.html.twig');
    }
}
