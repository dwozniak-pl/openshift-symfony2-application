<?php

namespace Dwozniak\OpenshiftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DwozniakOpenshiftBundle:Default:index.html.twig');
    }
}
