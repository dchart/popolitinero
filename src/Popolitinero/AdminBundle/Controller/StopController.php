<?php

namespace Popolitinero\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Popolitinero\DefaultBundle\Entity\Stop;
use Popolitinero\AdminBundle\Form\StopType;

/**
 * Stop controller.
 *
 * @Route("/admin/arrets")
 */
class StopController extends Controller
{
    /**
     * Lists all Stop entities.
     *
     * @Route("/", name="admin_arrets")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PopolitineroDefaultBundle:Stop')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Stop entity.
     *
     * @Route("/{id}/show", name="admin_arrets_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PopolitineroDefaultBundle:Stop')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stop entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Stop entity.
     *
     * @Route("/new", name="admin_arrets_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Stop();
        $form   = $this->createForm(new StopType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Stop entity.
     *
     * @Route("/create", name="admin_arrets_create")
     * @Method("post")
     * @Template("PopolitineroDefaultBundle:Stop:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Stop();
        $request = $this->getRequest();
        $form    = $this->createForm(new StopType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_arrets_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Stop entity.
     *
     * @Route("/{id}/edit", name="admin_arrets_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PopolitineroDefaultBundle:Stop')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stop entity.');
        }

        $editForm = $this->createForm(new StopType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Stop entity.
     *
     * @Route("/{id}/update", name="admin_arrets_update")
     * @Method("post")
     * @Template("PopolitineroDefaultBundle:Stop:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PopolitineroDefaultBundle:Stop')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stop entity.');
        }

        $editForm   = $this->createForm(new StopType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_arrets_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Stop entity.
     *
     * @Route("/{id}/delete", name="admin_arrets_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PopolitineroDefaultBundle:Stop')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stop entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_arrets'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
