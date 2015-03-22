<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /*
     *  <----------------------MICHAŁ SKOWRON---------------------->
     */
    
     /**
     * @Route("/waran.html", name="waran")
     */
    public function waranAction()
    {
        return $this->render('default/waran.html.twig');
    }

    /*
     *  <----------------------ARKADIUSZ RYPULAK---------------------->
     */



    /*
     *  <----------------------KAMIL SKOWRONEK---------------------->
     */



    /*
     *  <---------------------BARTŁOMIEJ PAZIEWSKI---------------------->
     */

    /**
     * @Route("/nosorozec-indyjski.html", name="nosorozec-indyjski")
     */
    public function  nosorozecIndyjskiAction()
    {
        return $this->render('default/nosorozec-indyjski.html.twig');
    }

    /**
     * @Route("/szarancza-pustynna.html", name="szarancza-pustynna")
     */
    public function  szaranczaPustynnaAction()
    {
        return $this->render('default/szarancza-pustynna.html.twig');
    }

}
