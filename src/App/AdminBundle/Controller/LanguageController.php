<?php

namespace App\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AdminBundle\Entity\Language;
use App\AdminBundle\Form\LanguageType;
use App\AdminBundle\Form\LanguageFilterType;

/**
 * Language controller.
 *
 * @Route("/language")
 */
class LanguageController extends Controller
{

    /**
     * Lists all Language entities.
     *
     * @Route("/", name="language")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $filters = $request->query->get("app_adminbundle_language_filter");
        if(empty($filters)) {
            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('AppAdminBundle:Language')->findAll();
        } else {
            $entities = $this->filterEntitiesAction($filters);

        }

        return array(
            'lang' => $this->container->get('app.adminbundle.services.language')->getCurrent(),
            'entities' => $entities,
            'filters' =>  $request
        );
    }

    public function filterEntitiesAction($filter)
    {
        $em        = $this->getDoctrine()->getManager();
        $query	= $em->getRepository("AppAdminBundle:Language")->createQueryBuilder('a');
        if(isset($filter['enabled'])) {
            $query->where("a.enabled = 1");
        } else {
            $query->where("a.enabled = 0");
        }
        $andModule = $query->expr()->andx();
        if(isset($filter['isoCode']) && !empty($filter['isoCode'])) {
            $andModule->add($query->expr()->like('LOWER(a.isoCode)',  $query->expr()->literal('%'.strtolower(addslashes($filter['isoCode'])).'%')));
        }
        $query->andWhere($andModule);

        return $query->getQuery()->getResult();
    }

    /**
     * Displays a form to create a new Filter Language entity.
     *
     * @Route("/filter", name="language_filter")
     * @Method("GET")
     * @Template()
     */
    public function filterAction(Request $request)
    {
       $filters = $request->get('filters');

        $entity = new Language();
        $form   = $this->createFilterForm($entity);
        if(!empty($filters)) {
            $form->handleRequest($request->get('filters'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Language entity.
     *
     * @param Language $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFilterForm(Language $entity)
    {
        $form = $this->createForm(new LanguageFilterType(), $entity, array(
            'action' => $this->generateUrl('language'),
            'method' => 'GET',
        ));

        $form->add('submit', 'submit', array('label' => 'Rechercher'));

        return $form;
    }

    /**
     * Creates a new Language entity.
     *
     * @Route("/", name="language_create")
     * @Method("POST")
     * @Template("AppAdminBundle:Language:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Language();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('language'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Language entity.
     *
     * @param Language $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Language $entity)
    {
        $form = $this->createForm(new LanguageType(), $entity, array(
            'action' => $this->generateUrl('language_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Language entity.
     *
     * @Route("/new", name="language_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Language();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Language entity.
     *
     * @Route("/{id}", name="language_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Language')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Language entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Language entity.
     *
     * @Route("/{id}/edit", name="language_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Language')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Language entity.');
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
    * Creates a form to edit a Language entity.
    *
    * @param Language $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Language $entity)
    {
        $form = $this->createForm(new LanguageType(), $entity, array(
            'action' => $this->generateUrl('language_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Language entity.
     *
     * @Route("/{id}", name="language_update")
     * @Method("PUT")
     * @Template("AppAdminBundle:Language:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Language')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Language entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('language'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Language entity.
     *
     * @Route("/{id}", name="language_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppAdminBundle:Language')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Language entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('language'));
    }

    /**
     * Creates a form to delete a Language entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('language_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    /**
     * Lists all Language entities.
     *
     * @Route("/list", name="language_list")
     * @Method("GET")
     * @Template()
     */
    public function listAction($lang, $routing)
    {
        $em = $this->getDoctrine()->getManager();
        $languages = $em->getRepository('AppAdminBundle:Language')->findAll();

        return array(
            'lang' => $lang,
            'languages' => $languages,
            'routing' => $routing
        );
    }
}
