<?php

namespace Ibw\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index1Action($name)
    {
        return $this->render('IbwJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
