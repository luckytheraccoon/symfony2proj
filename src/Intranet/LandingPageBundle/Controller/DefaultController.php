<?php

namespace Intranet\LandingPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IntranetLandingPageBundle:Default:index.html.twig');
    }
}
