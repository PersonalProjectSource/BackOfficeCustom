<?php

namespace App\MediaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\MediaBundle\Entity\Media;
use App\MediaBundle\Form\MediaType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Media controller.
 *
 * @Route("/media")
 */
class MediaController extends Controller
{

    /**
     * Lists all Media entities.
     *
     * @Route("/", name="media")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sDirPath = 'uploads/documents/';
        $entities = $em->getRepository('AppMediaBundle:Media')->findAll();

        return array(
            'sDirePath' => $sDirPath,
            'entities' => $entities
        );
    }
    
    /**
     * Creates a new Media entity.
     *
     * @Route("/", name="media_create")
     * @Method("POST")
     * @Template("AppMediaBundle:Media:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Media();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->upload();
            $em->persist($entity);

            $em->flush();

            $src       = $this->get('kernel')->getRootDir() . '/../web/uploads/documents/' . $entity->getPath() . '.' . $entity->getExtension();
            $aDataImageOrigin = getimagesize($src);
            if($aDataImageOrigin[0] > $aDataImageOrigin[1]) {
                $newWidth = 50;
                $newHeight = round(50 / $aDataImageOrigin[0] * $aDataImageOrigin[1]);
            } else {
                $newWidth = round(50 / $aDataImageOrigin[1] * $aDataImageOrigin[0]);
                $newHeight = 50;
            }

            $this->cropAction($request, $x = 0, $y = 0,$w_new = $newWidth, $h_new = $newHeight, $w = $aDataImageOrigin[0], $h = $aDataImageOrigin[1], $id = $entity->getId(), $slug = "thumb");
        }

        return $this->redirect($this->generateUrl('media'));

    }

    /**
     * Creates a form to create a Media entity.
     *
     * @param Media $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Media $entity)
    {
        $form = $this->createForm(new MediaType(), $entity, array(
            'action' => $this->generateUrl('media_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new Media entity.
     *
     * @Route("/new", name="media_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Media();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Media entity.
     *
     * @Route("/{id}", name="media_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppMediaBundle:Media')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Media entity.
     *
     * @Route("/{id}/edit", name="media_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppMediaBundle:Media')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $editForm   = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
            
        $formats = $em->getRepository('AppMediaBundle:Croping')->findAll();
        
        // Recuperation des metadonnées de l'image.
        $filename = 'uploads/documents/'.$entity->getPath().'.'.$entity->getExtension();
        $aDataImageOrigin = getimagesize($filename, $infos);
        $iCoeffCrop = $aDataImageOrigin[0] / 500;
        $iImageWidth =  $aDataImageOrigin[0];

        if ( $aDataImageOrigin[0] > 500) {
            
            $iImageWidth = 500;
        }
        
        return array(
            'iImageWith'  => $iImageWidth,
            'dCoeffCrop'  => $iCoeffCrop,
            'entity'      => $entity,
            'formats'     => $formats,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Media entity.
    *
    * @param Media $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Media $entity)
    {
        $form = $this->createForm(new MediaType(), $entity, array(
            'action' => $this->generateUrl('media_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        
//        $form->add('path', 'text', array(
//            'attr' => array (
//                'value' => $entity->getPath()
//            )
//        ));
        
        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Media entity.
     *
     * @Route("/{id}", name="media_update")
     * @Method("PUT")
     * @Template("AppMediaBundle:Media:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em     = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppMediaBundle:Media')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm   = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        
        // TODO lbrau : Voir pour gerer l'exception en commentaire au dessous.
        $entity->upload();
        $em->persist($entity);
        $em->flush();

//        if ($editForm->isValid()) {
//            
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('media_edit', array('id' => $id)));
//        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Media entity.
     *
     * @Route("/{id}", name="media_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppMediaBundle:Media')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Media entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('media'));
    }

    /**
     * Creates a form to delete a Media entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('media_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Supprimer',
                'attr'  => array(
                    'class' => 'btn btn-xs btn-danger'
                )))
            ->getForm()
        ;
    }
    
    /**
     * Displays a form to edit an existing Media entity.
     *
     * @Route("/crop", name="media_crop")
     * @Method("POST")
     * @Template()
     */
    public function cropAction(Request $request, $x = 0, $y = 0, $w_new = 0, $h_new = 0, $w = 0, $h = 0, $id = 5, $slug = "")
    {
        $em      = $this->getDoctrine()->getManager();
        $jpeg_quality = 100;
        if($request->isXmlHttpRequest()) {
            $x       = $request->get('ajax_x');
            $y       = $request->get('ajax_y');
            $w_new       = $request->get('ajax_w');
            $h_new       = $request->get('ajax_h');
            $w       = $request->get('ajax_w');
            $h       = $request->get('ajax_h');
            $id      = $request->get('ajax_id');
            $slug    = $request->get('ajax_slug');
        }
            
            $entity = $em->getRepository('AppMediaBundle:Media')->find($id);
            $src       = $this->get('kernel')->getRootDir() . '/../web/uploads/documents/' . $entity->getPath() . '.' . $entity->getExtension();   

            $extension = pathinfo($src, PATHINFO_EXTENSION);
            $destcrop = $this->get('kernel')->getRootDir() . '/../web/uploads/documents/' . $entity->getPath() . '.' .$entity->getExtension(); 
            $destcrop = explode('.'.$extension, $destcrop);
            $destcrop = $destcrop[0].'_'. $slug . '.' . $extension;
            
            switch ($extension) {
                case 'jpg':
                    $img_r = imagecreatefromjpeg($src);
                    break;
                case 'jpeg':
                    $img_r = imagecreatefromjpeg($src);
                    break;
                case 'gif':
                    $img_r = imagecreatefromgif($src);
                    break;
                case 'png':
                    $img_r = imagecreatefrompng($src);
                    break;
                default:
                    echo "L'image n'est pas dans un format reconnu. Extensions autorisÃ©es : jpg, jpeg, gif, png";
                    break;
            }
            $dst_r = imagecreatetruecolor($w_new, $h_new);
            imagecopyresampled($dst_r, $img_r, 0, 0, $x, $y, $w_new, $h_new, $w, $h);
            
            switch ($extension) {
                case 'jpg':
                    imagejpeg($dst_r, $destcrop , $jpeg_quality);
                    break;
                case 'jpeg':
                    imagejpeg($dst_r, $destcrop , $jpeg_quality);
                    break;
                case 'gif':
                    imagegif($dst_r, $destcrop);
                    break;
                case 'png':
                    imagepng($dst_r, $destcrop);
                    break;
                default:
                    echo "L'image n'est pas dans un format reconnu. Extensions autorisÃ©es : jpg, gif, png";
                    break;
            }
            @chmod($destcrop, 0777);
            
            $response = new JsonResponse();
            
            $response->setData(array(
                
                'path' => $entity->getPath()
            ));
            
            return $response;
            //die ('fin');

        
    }

    /**
     * Delete langue entity.
     *
     * @Route("/deletemedia/{id}", name="delete_media_datatable")
     */
    public function deleteMediaAction($id)
    {
        $oEm = $this->getDoctrine()->getManager();
        $oMediaSelected = $oEm->getRepository('AppMediaBundle:Media')->find($id);


        if (!$oMediaSelected) {
            throw $this->createNotFoundException('Unable to find Field entity.');
        }


        $oEm->remove($oMediaSelected);
        $oEm->flush();

        return $this->redirect($this->generateUrl('media'));
    }

}
