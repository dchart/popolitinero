<?php

namespace Popolitinero\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HubManagerController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $hubs = $em->getRepository('PopolitineroDefaultBundle:Hub')->findAll();
        $barycenter = $em->getRepository('PopolitineroDefaultBundle:Hub')->getBarycenter();
        return array('hubs' => $hubs, 'barycenter' => $barycenter);
    }
    
    /**
     * @Route("/{hubslug}")
     * @Template()
     */
    public function hubAction($hubslug)
    {
        $em   = $this->getDoctrine()->getEntityManager();
        $hub  = $em->getRepository('PopolitineroDefaultBundle:Hub')->findOneBySlug($hubslug);
        $barycenter = $em->getRepository('PopolitineroDefaultBundle:Hub')->getBarycenter($hubslug);
        if(!$hub):
          throw $this->createNotFoundException('The hub sluggified by '.$hubslug.' does not exist.');
        endif;
        return array('hubslug' => $hubslug, 'hub' => $hub, 'barycenter' => $barycenter);
    }
}
