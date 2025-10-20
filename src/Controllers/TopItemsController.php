<?php

namespace TopItems\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class TopItemsController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('TopItems::Index');
    }
}