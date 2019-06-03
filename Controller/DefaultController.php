<?php

namespace Darvin\Bitrix24Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DarvinBitrix24Bundle:Default:index.html.twig');
    }
}
