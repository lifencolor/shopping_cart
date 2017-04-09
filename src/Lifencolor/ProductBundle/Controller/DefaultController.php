<?php

namespace Lifencolor\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LifencolorProductBundle:Default:index.html.twig');
    }
}
