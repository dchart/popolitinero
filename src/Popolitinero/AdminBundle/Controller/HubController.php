<?php

namespace Popolitinero\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Popolitinero\DefaultBundle\Entity\Hub;
use Popolitinero\AdminBundle\Form\HubType;

/**
 * Hub controller.
 *
 * @Route("/hub")
 */
class HubController extends Controller
{
    /**
     * Lists all Hub entities.
     *
     * @Route("/", name="hub")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PopolitineroDefaultBundle:Hub')->findAll();
        $barycenter = $em->getRepository('PopolitineroDefaultBundle:Hub')->getBarycenter();
        return array('entities' => $entities, 'barycenter' => $barycenter);
    }

    /**
     * Finds and displays a Hub entity.
     *
     * @Route("/{slug}/show", name="hub_show")
     * @Template()
     */
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PopolitineroDefaultBundle:Hub')->findAll();
        $entity = $em->getRepository('PopolitineroDefaultBundle:Hub')->findOneBySlug($slug);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hub entity.');
        }

        $deleteForm = $this->createDeleteForm($slug);

        return array(
            'entities'    => $entities,
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Hub entity.
     *
     * @Route("/new", name="hub_new")
     * @Template()
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('PopolitineroDefaultBundle:Hub')->findAll();
        $barycenter = $em->getRepository('PopolitineroDefaultBundle:Hub')->getBarycenter();
        $entity = new Hub();
        $form   = $this->createForm(new HubType(), $entity);

        return array(
            'entities'    => $entities,
            'entity'      => $entity,
            'barycenter'  => $barycenter,
            'form'        => $form->createView()
        );
    }

    /**
     * Creates a new Hub entity.
     *
     * @Route("/create", name="hub_create")
     * @Method("post")
     * @Template("PopolitineroAdminBundle:Hub:new.html.twig")
     */
    public function createAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('PopolitineroDefaultBundle:Hub')->findAll();
        $barycenter = $em->getRepository('PopolitineroDefaultBundle:Hub')->getBarycenter();
        
        $entity  = new Hub();
        $request = $this->getRequest();
        $form    = $this->createForm(new HubType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hub_show', array('slug' => $entity->getSlug())));
            
        }

        return array(
            'entities'    => $entities,
            'entity'      => $entity,
            'barycenter'  => $barycenter,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Hub entity.
     *
     * @Route("/{slug}/edit", name="hub_edit")
     * @Template()
     */
    public function editAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('PopolitineroDefaultBundle:Hub')->findAll();
        $entity = $em->getRepository('PopolitineroDefaultBundle:Hub')->findOneBySlug($slug);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hub entity.');
        }

        $editForm = $this->createForm(new HubType(), $entity);
        $deleteForm = $this->createDeleteForm($slug);
        
        return array(
            'entities'    => $entities,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
        );
    }

    /**
     * Edits an existing Hub entity.
     *
     * @Route("/{id}/update", name="hub_update")
     * @Method("post")
     * @Template("PopolitineroDefaultBundle:Hub:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PopolitineroDefaultBundle:Hub')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hub entity.');
        }

        $editForm   = $this->createForm(new HubType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hub_show', array('slug' => $entity->getSlug())));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Hub entity.
     *
     * @Route("/{id}/delete", name="hub_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PopolitineroDefaultBundle:Hub')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hub entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hub'));
    }

    private function createDeleteForm($slug)
    {
        return $this->createFormBuilder(array('slug' => $slug))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
