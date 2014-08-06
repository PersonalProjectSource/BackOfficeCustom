<?php

namespace App\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AdminBundle\Entity\Field;
use App\AdminBundle\Form\FieldType;

/**
 * Field controller.
 *
 * @Route("/field")
 */
class FieldController extends Controller
{

    /**
     * Lists all Field entities.
     *
     * @Route("/list/{sCodeLangue}", name="field")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($sCodeLangue = "FR")
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if(!$user instanceof \App\AdminBundle\Entity\User){
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $oEm = $this->getDoctrine()->getManager();
        $langues = $oEm->getRepository('AppAdminBundle:Langue')->findAll();
        $oFieldTranslationRepo = $oEm->getRepository("AppAdminBundle:FieldTranslation");

        //Sélection de la langue en fonction du paramètre id (sélecteur en BO)
        $oLangueSelected = $oEm->getRepository('AppAdminBundle:Langue')->findOneByCode($sCodeLangue);
        
        // On récupere les questions en fonction de la langue selectionnée.
        $afieldsFromLangueSelected = $oFieldTranslationRepo->findByLangue($oLangueSelected);
        $aDataFields               = $oEm->getRepository("AppAdminBundle:Field")->findAll();
        $aFields = array();
        
        
        foreach ($aDataFields as $iKey => $oField) {
            
            $oDataFieldTranslation    = $oEm->getRepository("AppAdminBundle:FieldTranslation")
                    ->findOneBy(array('object' => $oField, 'langue' => $oLangueSelected));
            
//            var_dump($oDataFieldTranslation->getValue());die;

            $aFields[$iKey]['object']['id']    = $oField->getId();
            $aFields[$iKey]['object']['cle']    = $oField->getCle();
            if (null == $oDataFieldTranslation) {
                
                 $aFields[$iKey]['value'] = "";
            }
            else {
                
                $aFields[$iKey]['value'] = $oDataFieldTranslation->getValue();
            }
        }
        
//        print_r($aFields);die;
        
        
        
        
        return array(
            'langues' => $langues,
            'selectlangue' => $oLangueSelected,
            'fields' => $aFields
        );
    }
    
    /**
     * Creates a new Field entity.
     *
     * @Route("/", name="field_create")
     * @Method("POST")
     * @Template("AppAdminBundle:Field:new.html.twig")
     */
    public function createAction(Request $request)
    {
        
        $entity = new Field();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('field'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Field entity.
     *
     * @param Field $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Field $entity)
    {
        
        $form = $this->createForm(new FieldType(), $entity, array(
            'action' => $this->generateUrl('field_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new Field entity.
     *
     * @Route("/new", name="field_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Field();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Field entity.
     *
     * @Route("/{id}", name="field_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Field')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Field entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Field entity.
     *
     * @Route("/{id}/edit", name="field_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Field')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Field entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Field entity.
    *
    * @param Field $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Field $entity)
    {
        $form = $this->createForm(new FieldType(), $entity, array(
            'action' => $this->generateUrl('field_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        
        // Bouton remplacé directement dans le twig pour homogénéisé le CSS.
        //$form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Field entity.
     *
     * @Route("/{id}", name="field_update")
     * @Method("PUT")
     * @Template("AppAdminBundle:Field:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Field')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Field entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('field'));
        }

        return array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Deletes a Field entity.
     *
     * @Route("/{id}", name="field_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request = null, $id)
    {
        
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppAdminBundle:Field')->find($id);

            if (!$entity) {

                throw $this->createNotFoundException('Unable to find Field entity.');
            }
        }
        
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('field'));
    }
    
    /**
     * Deletes a Field entity.
     *
     * @Route("/delete/{id}", name="field_delete_list")
     */
    public function deleteFieldListAction(Request $request = null, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppAdminBundle:Field')->find($id);

        if (!$entity) {

            throw $this->createNotFoundException('Unable to find Field entity.');
        }
            
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('field'));
    }
    
    /**
     * Delete Field entity without their translations.
     *                                               
     * @Route("/delete/field/{iId}/{iLangue}", name="delete_field_from_list")
     */
    public function deleteFieldFromListAction($iId, $iLangue)
    {
        $oEm               = $this->getDoctrine()->getManager();
        $oField            = $oEm->getRepository('AppAdminBundle:Field')->find($iId);
        $oLangue           = $oEm->getRepository("AppAdminBundle:Langue")->find($iLangue);
        $aFieldTranslation = $oEm->getRepository("AppAdminBundle:FieldTranslation")
                                        ->findBy(array('object' => $oField, 'langue' => $oLangue));
        
        if (!$oField) {

            throw $this->createNotFoundException('Unable to find Field entity.');
        }
        
        foreach ($aFieldTranslation as $oTranslation) {
            
            $oEm->remove($oTranslation);
        }
        
        
        $oEm->flush();
        
        return $this->redirect($this->generateUrl('field'));
    }

    /**
     * Creates a form to delete a Field entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('field_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
