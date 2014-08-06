<?php

namespace App\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AdminBundle\Entity\FieldTranslation;
use App\AdminBundle\Form\FieldTranslationType;

/**
 * FieldTranslation controller.
 *
 * @Route("/fieldtranslation")
 */
class FieldTranslationController extends Controller
{

    /**
     * Lists all FieldTranslation entities.
     *
     * @Route("/", name="fieldtranslation")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppAdminBundle:FieldTranslation')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new FieldTranslation entity.
     *
     * @Route("/", name="fieldtranslation_create")
     * @Method("POST")
     * @Template("AppAdminBundle:FieldTranslation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new FieldTranslation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fieldtranslation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a FieldTranslation entity.
     *
     * @param FieldTranslation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FieldTranslation $entity)
    {
        $form = $this->createForm(new FieldTranslationType(), $entity, array(
            'action' => $this->generateUrl('fieldtranslation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FieldTranslation entity.
     *
     * @Route("/new", name="fieldtranslation_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new FieldTranslation();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a FieldTranslation entity.
     *
     * @Route("/{id}", name="fieldtranslation_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:FieldTranslation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FieldTranslation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing FieldTranslation entity.
     *
     * @Route("/{id}/edit", name="fieldtranslation_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:FieldTranslation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FieldTranslation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a FieldTranslation entity.
    *
    * @param FieldTranslation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(FieldTranslation $entity)
    {
        $form = $this->createForm(new FieldTranslationType(), $entity, array(
            'action' => $this->generateUrl('fieldtranslation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing FieldTranslation entity.
     *
     * @Route("/{id}", name="fieldtranslation_update")
     * @Method("PUT")
     * @Template("AppAdminBundle:FieldTranslation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:FieldTranslation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FieldTranslation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fieldtranslation_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a FieldTranslation entity.
     *
     * @Route("/{id}", name="fieldtranslation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppAdminBundle:FieldTranslation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FieldTranslation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fieldtranslation'));
    }

    /**
     * Creates a form to delete a FieldTranslation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fieldtranslation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
