<?php

namespace Acme\OAuthServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeOAuthServerBundle:Default:index.html.twig', array('name' => $name));
    }
}
