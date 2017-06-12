<?php

namespace Vladg\Framework7Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VladgFramework7Bundle:Default:index.html.twig');
    }
}
