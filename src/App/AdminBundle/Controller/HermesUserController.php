<?php

namespace App\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AdminBundle\Entity\HermesUser;
use App\AdminBundle\Form\HermesUserType;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * HermesUser controller.
 *
 * @Route("/hermesuser")
 */
class HermesUserController extends Controller
{

    /**
     * Lists all HermesUser entities.
     *
     * @Route("/", name="users_hermes_list")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppAdminBundle:HermesUser')->findAll();
        
        return array(
            'entities' => $entities,
        );
    }

    /**
     * Displays a form to create a new HermesUser entity.
     *
     * @Route("/generate", name="hermesuser_generate")
     * @Method("GET")
     * @Template()
     */
    public function generateAction()
    {
        $oEm = $this->getDoctrine()->getManager();
        $langues = $oEm->getRepository('AppAdminBundle:Langue')->findAll();
        $tab_lang = array();
        foreach($langues as $langue) {
            $tab_lang[$langue->getCode()] = $langue->getLibelle();
        }

        $form = $this->createFormBuilder()
            ->add('number', 'integer', array('label' => 'Nombre de participants tiré au sort', 'required' => false, 'data' => 0))
            ->add('langue', 'choice', array('label' => 'Langue des questions', 'choices' => $tab_lang))
            ->add('save', 'submit', array('label' => 'Générer'))
            ->getForm();

        return array(

            'form'   => $form->createView(),
        );
    }

    /**
     * Lists generate HermesUser reponses.
     *
     * @Route("/reponses", name="users_hermes_reponse")
     * @Method("POST")
     * @Template()
     */
    public function reponsesAction(Request $request)
    {
        $data = $request->get('form', array());
        $lang = $data['langue'];
        if(!isset($data['number']) || empty($data['number']) || $data['number'] == 0){
            $number = 'all';
        } else {
            $number = $data['number'];
        }


        $oEm = $this->getDoctrine()->getManager();
        if($number == 'all'){
            $sql = "SELECT * FROM hermesuser u WHERE u.end = 1 ORDER BY RAND();";
        } else {
            $sql = "SELECT * FROM hermesuser u WHERE u.end = 1 ORDER BY RAND() LIMIT " . $number . ";";
        }

        $rsm = new ResultSetMapping;
        $rsm->addEntityResult('App\AdminBundle\Entity\HermesUser', 'u');
        $rsm->addFieldResult('u','id','id');
        $rsm->addFieldResult('u','hermesid','hermesid');
        $rsm->addFieldResult('u','nom','nom');
        $rsm->addFieldResult('u','prenom','prenom');
        $rsm->addFieldResult('u','email','email');
        $qns = $oEm->createNativeQuery($sql, $rsm);
        $users = $qns->getResult();

        $tab = array();

        $em = $this->getDoctrine()->getManager();
        $questions = $em->getRepository('AppAdminBundle:Question')->findAll();
        //$users = $em->getRepository('AppAdminBundle:HermesUser')->findAll();
        $aLangueSelected = $oEm->getRepository('AppAdminBundle:Langue')->findByCode($lang);


        foreach($users as $user){

            $tab[$user->getId()]['user']['id'] = $user->getId();
            $tab[$user->getId()]['user']['hemersid'] = $user->getHermesId();
            $tab[$user->getId()]['user']['nom'] = $user->getNom();
            $tab[$user->getId()]['user']['prenom'] = $user->getPrenom();
            $tab[$user->getId()]['user']['email'] = $user->getEmail();

            foreach($questions as $question) {

                $questionTranslation = $oEm->getRepository('AppAdminBundle:QuestionTranslation')->findOneBy(array('object' => $question, 'langues' => $aLangueSelected));
                $reponsesUser =  $oEm->getRepository('AppAdminBundle:QuestionUserHermes')->findOneBy(array('usersHermes' => $user, 'question' => $question));

                if($questionTranslation) {
                    $reponse1 = $questionTranslation->getReponse1();
                    if(!empty($reponse1) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes && $reponsesUser->getReponse1() == true){
                        $tab[$user->getId()]['reponses'][$question->getId()]['value'][1] = $reponse1;
                    }
                    $reponse2 = $questionTranslation->getReponse2();
                    if(!empty($reponse2) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes && $reponsesUser->getReponse2() == true){
                        $tab[$user->getId()]['reponses'][$question->getId()]['value'][2] = $reponse2;
                    }
                    $reponse3 = $questionTranslation->getReponse3();
                    if(!empty($reponse3) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes && $reponsesUser->getReponse3() == true){
                        $tab[$user->getId()]['reponses'][$question->getId()]['value'][3] = $reponse3;
                    }
                    $reponse4 = $questionTranslation->getReponse4();
                    if(!empty($reponse4) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes && $reponsesUser->getReponse4() == true){
                        $tab[$user->getId()]['reponses'][$question->getId()]['value'][4] = $reponse4;
                    }
                    $reponse5 = $questionTranslation->getReponse5();
                    if(!empty($reponse5) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes && $reponsesUser->getReponse5() == true){
                        $tab[$user->getId()]['reponses'][$question->getId()]['value'][5] = $reponse5;
                    }
                    $reponse6 = $questionTranslation->getReponse6();
                    if(!empty($reponse6) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes && $reponsesUser->getReponse6() == true){
                        $tab[$user->getId()]['reponses'][$question->getId()]['value'][6] = $reponse6;
                    }

                    if(!isset($tab[$user->getId()]['reponses'][$question->getId()]) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                        $tab[$user->getId()]['reponses'][$question->getId()]['value'][1] = $reponsesUser->getContenu();
                    }

                    $tab[$user->getId()]['reponses'][$question->getId()]['libelle'] = $questionTranslation->getLibelle();
                }

            }

        }
        return array(
            'tab' => $tab,
            'questions' => $questions
        );
    }
    
    /**
     * Creates a new HermesUser entity.
     *
     * @Route("/", name="hermesuser_create")
     * @Method("POST")
     * @Template("AppAdminBundle:HermesUser:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new HermesUser();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('users_hermes_list', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a HermesUser entity.
     *
     * @param HermesUser $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(HermesUser $entity)
    {
        $form = $this->createForm(new HermesUserType(), $entity, array(
            'action' => $this->generateUrl('hermesuser_create'),
            'method' => 'POST',
        ));

         $form->add('submit', 'submit', array(
            'label' => 'Creer',
            'attr' => array(
                'class' => 'btn btn-danger'
            ), 
        ));

        return $form;
    }

    /**
     * Displays a form to create a new HermesUser entity.
     *
     * @Route("/new", name="hermesuser_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new HermesUser();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a HermesUser entity.
     *
     * @Route("/{id}", name="hermesuser_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:HermesUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HermesUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing HermesUser entity.
     *
     * @Route("/{id}/edit", name="hermesuser_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:HermesUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HermesUser entity.');
        }

        $editForm   = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a HermesUser entity.
    *
    * @param HermesUser $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(HermesUser $entity)
    {
        $form = $this->createForm(new HermesUserType(), $entity, array(
            'action' => $this->generateUrl('hermesuser_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

         $form->add('submit', 'submit', array(
            'label' => 'Modifier',
            'attr' => array(
                'class' => 'btn btn-danger'
            ), 
        ));

        return $form;
    }
    /**
     * Edits an existing HermesUser entity.
     *
     * @Route("/{id}", name="hermesuser_update")
     * @Method("PUT")
     * @Template("AppAdminBundle:HermesUser:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:HermesUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HermesUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('users_hermes_list', array('id' => $id)));
        }
        
        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a HermesUser entity.
     *
     * @Route("/{id}", name="hermesuser_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppAdminBundle:HermesUser')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HermesUser entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('users_hermes_list'));
    }
    
     /**
     * Delete UserHermes entity from list
     *
     * @Route("/delete/{iIdHermesUser}/", name="delete_userHermes_from_list")
     */
    public function deleteQuestionListAction($iIdHermesUser)
    {
        $oEm     = $this->getDoctrine()->getManager();
        $oHermesUser  = $oEm->getRepository('AppAdminBundle:HermesUser')->find($iIdHermesUser);
        
        if (!$oHermesUser) {

            throw $this->createNotFoundException('Unable to find User entity.');
        }
        
        $oEm->remove($oHermesUser);
        $oEm->flush();
        
        return $this->redirect($this->generateUrl('users_hermes_list'));
    }

    /**
     * Creates a form to delete a HermesUser entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hermesuser_delete', array('id' => $id)))
            ->setMethod('DELETE')
             ->add('submit', 'submit', array(
                'label' => 'Delete',
                'attr'  => array(
                    'class' => 'btn btn-xs btn-danger'
                )
            ))
            ->getForm()
        ;
    }
}
