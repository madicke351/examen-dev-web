<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Blog/Default/index.html.twig');
    }


    public function logerAction()
    {
        return $this->render('@Blog/Default/loger.html.twig');
    } 



    public function inscrireAction()
    {
        return $this->render('@Blog/Default/inscrire.html.twig');
    } 



    public function mesarticleAction()
    {
        return $this->render('@Blog/Default/mesarticle.html.twig');
    } 



   
}

