<?php

namespace App\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AdminBundle\Entity\Question;
use App\AdminBundle\Form\QuestionType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Question controller.
 *
 * @Route("/question")
 */
class QuestionController extends Controller
{

    /**
     * Liste des questions par langue
     *
     * @Route("/list/{sCodeLangue}", name="list_questions")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($sCodeLangue = "fr")
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if(!$user instanceof \App\AdminBundle\Entity\User){
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $oEm                      = $this->getDoctrine()->getManager();
        $langues                  = $oEm->getRepository('AppAdminBundle:Langue')->findAll();
        $oQuestionRepository       = $oEm->getRepository("AppAdminBundle:Question");
        $oQuestionTranslationRepo = $oEm->getRepository("AppAdminBundle:QuestionTranslation");
        $aQuestionFromLangueSelected = array();
        


        //Sélection de la langue en fonction du paramètre id (sélecteur en BO)
        $oLangueSelected = $oEm->getRepository('AppAdminBundle:Langue')->findOneByCode($sCodeLangue);
        $aLangueSelected = $oEm->getRepository('AppAdminBundle:Langue')->findByCode($sCodeLangue);
        
        // Chargement des questions en fonction de la première langue sélectionnée
        if($oLangueSelected) {
           $questions = $oEm->getRepository('AppAdminBundle:Question')->findBy(array('id' => 1 ));
        } else {
            $questions = null;
        }
        
        $aQuestions = $oEm->getRepository('AppAdminBundle:Question')->findAll();
        
        // creation d'un tableau reproduisant l'objet passe en arguments.
        
        
        $question = array();
        //var_dump($oLangueSelected->getCode());
        foreach ($aQuestions as $key => $oQuestion) {
            
            $question[$key]['object']['id'] = $oQuestion->getId();
            $question[$key]['object']['type'] = $oQuestion->getType();
            $oQuestionTranslation = $oEm->getRepository("AppAdminBundle:QuestionTranslation")
                    ->findOneBy(array('object' => $oQuestion, 'langues' => $oLangueSelected));
            
            if($oQuestionTranslation) {
                $question[$key]['libelle'] = $oQuestionTranslation->getLibelle();
                 $reponse1 = $oQuestionTranslation->getReponse1();
                    if(!empty($reponse1)){
                        $question[$key]['reponses'][1] = $reponse1;
                    }
                    $reponse2 = $oQuestionTranslation->getReponse2();
                    if(!empty($reponse2)){
                        $question[$key]['reponses'][2] = $reponse2;
                    }
                    $reponse3 = $oQuestionTranslation->getReponse3();
                    if(!empty($reponse3)){
                        $question[$key]['reponses'][3] = $reponse3;
                    }
                    $reponse4 = $oQuestionTranslation->getReponse4();
                    if(!empty($reponse4)){
                        $question[$key]['reponses'][4] = $reponse4;
                    }
                    $reponse5 = $oQuestionTranslation->getReponse5();
                    if(!empty($reponse5)){
                        $question[$key]['reponses'][5] = $reponse5;
                    }
                    $reponse6 = $oQuestionTranslation->getReponse6();
                    if(!empty($reponse6)){
                        $question[$key]['reponses'][6] = $reponse6;
                    }
                
            } else {
                $question[$key]['libelle'] = null;
            }
        }
        
        return array(
            'langues' => $langues,
            'selectlangue' => $oLangueSelected,
            'questions' => $question,
            'langueSelected' => $sCodeLangue
        );
    }
    
    /**
     * Creates a new Question entity.
     *
     * @Route("/creer", name="question_create")
     * @Method("POST")
     * @Template("AppAdminBundle:Question:new.html.twig")
     */
    public function createAction(Request $request)
    {

        $entity = new Question();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('list_questions'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Question entity.
     *
     * @param Question $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Question $entity)
    {
        $form = $this->createForm(new QuestionType(), $entity, array(
            'action' => $this->generateUrl('question_create'),
            'method' => 'POST',
        ));

         $form->add('submit', 'submit', array(
            'label' => 'Créer',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Question entity.
     *
     * @Route("/ajouter", name="question_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Question();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Get Json
     *
     * @Route("/json", name="question_json")
     * @Method("GET")
     * @Template()
     */
    public function jsonAction(){

        $oEm = $this->getDoctrine()->getManager();

        $session = $this->container->get('request')->getSession();
        $session->set('user_id', 1);

        $usersHermes = null;
        $reponsesUser = null;
        $tab_user = array();
        if($session->get('user_id')){
            $usersHermes = $oEm->getRepository('AppAdminBundle:HermesUser')->find($session->get('user_id'));
            if($usersHermes instanceof \App\AdminBundle\Entity\HermesUser){
                $tab_user['id'] = $usersHermes->getId();
                $tab_user['prenom'] = $usersHermes->getPrenom();
                $tab_user['nom'] = $usersHermes->getNom();
                $tab_user['email'] = $usersHermes->getEmail();
                $tab_user['position'] = $usersHermes->getPosition();
                $tab_user['hermesid'] = $usersHermes->getHermesid();
                $tab_user['end'] = $usersHermes->getEnd();
            }
        }


        $tab_fields['fr']['bienvenue'] = "Bienvenue dans la maison des carrés";
        $tab_fields['fr']['description'] = "Vivamus tincidunt justo non cursus dapibus. Nulla pellentesque porta ipsum in suscipit. Suspendisse massa ipsum, faucibus eu egestas eget, lobortis eget lorem. Vivamus vehicula, sapien sed laoreet ultricies, tellus mauris fermentum elit, ut tempus quam mi non lorem. Vestibulum odio ipsum, ornare vel lacinia et, porttitor eu ipsum. Etiam consectetur urna lobortis lorem ornare porta. Donec egestas justo eget nibh pretium, vitae ornare sem condimentum";


        $langues = $oEm->getRepository('AppAdminBundle:Langue')->findAll();
        $questions = $oEm->getRepository('AppAdminBundle:Question')->findAll();
        $tab_fields = array();
        $tab = array();

        foreach($langues as $langue) {

            $fields = $oEm->getRepository('AppAdminBundle:Field')->findAll();

            foreach($fields as $field) {
                $fieldTranslation = $oEm->getRepository('AppAdminBundle:FieldTranslation')->findOneBy(array('object' => $field->getId(), 'langue' => $langue));
                if($fieldTranslation) {
                    $tab[$langue->getCode()]['fields'][$field->getCle()] = $fieldTranslation->getValue();
                }
            }

            foreach($questions as $question) {
                $questionTranslation = $oEm->getRepository('AppAdminBundle:QuestionTranslation')->findOneBy(array('langues' => $langue, 'object' => $question));
                if($usersHermes instanceof \App\AdminBundle\Entity\HermesUser) {
                    $reponsesUser =  $oEm->getRepository('AppAdminBundle:QuestionUserHermes')->findOneBy(array('usersHermes' => $usersHermes, 'question' => $question));
                }

                $tmp = array() ;
                if($question->getType() == 0){
                    $tmp['type'] = "textarea" ;
                } else {
                    $tmp['type'] = "checkbox" ;
                }

                if($questionTranslation) {
                    $tmp['label'] = $questionTranslation->getLibelle() ;
                    if(isset($tab[$langue->getCode()]['fields']['helper'])) {
                        $tmp['helper'] = $tab[$langue->getCode()]['fields']['helper'];
                    } else {
                        $tmp['helper'] = null;
                    }

                    $tmp['reponses'] = array();
                    $reponse1 = $questionTranslation->getReponse1();
                    if(!empty($reponse1)){
                        $tmp_rep = array();
                        $tmp_rep['label'] = $reponse1;
                        $tmp_rep['id'] = 'repA';
                        if($reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                            $tmp_rep['value'] = $reponsesUser->getReponse1();
                        } else {
                            $tmp_rep['value'] = false;
                        }
                        array_push($tmp['reponses'],$tmp_rep);
                    }
                    $reponse2 = $questionTranslation->getReponse2();
                    if(!empty($reponse2)){
                        $tmp_rep = array();
                        $tmp_rep['label'] = $reponse2;
                        $tmp_rep['id'] = 'repB';
                        if($reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                            $tmp_rep['value']= $reponsesUser->getReponse2();
                        } else {
                            $tmp_rep['value'] = false;
                        }
                        array_push($tmp['reponses'],$tmp_rep);
                    }
                    $reponse3 = $questionTranslation->getReponse3();
                    if(!empty($reponse3)){
                        $tmp_rep = array();
                        $tmp_rep['label'] = $reponse3;
                        $tmp_rep['id'] = 'repC';
                        if($reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                            $tmp_rep['value'] = $reponsesUser->getReponse3();
                        } else {
                            $tmp_rep['value'] = false;
                        }
                        array_push($tmp['reponses'],$tmp_rep);
                    }
                    $reponse4 = $questionTranslation->getReponse4();
                    if(!empty($reponse4)){
                        $tmp_rep = array();
                        $tmp_rep['label'] = $reponse4;
                        $tmp_rep['id'] = 'repD';
                        if($reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                            $tmp_rep['value'] = $reponsesUser->getReponse4();
                        } else {
                            $tmp_rep['value'] = false;
                        }
                        array_push($tmp['reponses'],$tmp_rep);
                    }
                    $reponse5 = $questionTranslation->getReponse5();
                    if(!empty($reponse5)){
                        $tmp_rep = array();
                        $tmp_rep['label'] = $reponse5;
                        $tmp_rep['id'] = 'repE';
                        if($reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                            $tmp_rep['value'] = $reponsesUser->getReponse5();
                        } else {
                            $tmp_rep['value'] = false;
                        }
                        array_push($tmp['reponses'],$tmp_rep);
                    }
                    $reponse6 = $questionTranslation->getReponse6();
                    if(!empty($reponse6)){
                        $tmp_rep = array();
                        $tmp_rep['label'] = $reponse6;
                        $tmp_rep['id'] = 'repF';
                        if($reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                            $tmp_rep['value'] = $reponsesUser->getReponse6();
                        } else {
                            $tmp_rep['value'] = false;
                        }
                        array_push($tmp['reponses'],$tmp_rep);
                    }

                       // $tmp = $tmp + $tmp['reponses'];

                    if((!isset($tmp['reponses']) || empty($tmp['reponses'])) && $reponsesUser instanceof \App\AdminBundle\Entity\QuestionUserHermes) {
                        $tmp['value'] = $reponsesUser->getContenu();
                        unset($tmp['reponses']);
                    } else if(!isset($tmp['reponses']) || empty($tmp['reponses'])){
                        $tmp['value'] = null;
                        unset($tmp['reponses']);
                    }
                    $tab[$langue->getCode()]["questions"][$question->getId()] = $tmp;
                }
            }
        }
        
        $response = new Response(json_encode(array(
            'user' => $tab_user,
            'tab' => $tab,
        )));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }

    /**
     * Get Json
     *
     * @Route("/excel", name="question_excel")
     * @Method("GET")
     * @Template()
     */
    public function excelAction(){

        define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        $phpExcelObject->getProperties()->setCreator("Hermès")
            ->setLastModifiedBy("Hermès")
            ->setTitle("Réponses Hermès Quizz")
            ->setSubject("Réponses Hermès Quizz")
            ->setDescription("Réponses Hermès Quizz");
        $phpExcelObject->setActiveSheetIndex(0);

        $oEm = $this->getDoctrine()->getManager();
        $users = $oEm->getRepository('AppAdminBundle:HermesUser')->findAll();

        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nom')
            ->setCellValue('B1', 'Prénom')
            ->setCellValue('C1', 'Email');

        $row = 3;
        foreach($users as $r => $user){
            $phpExcelObject->getActiveSheet()->insertNewRowBefore($row,1);

            $phpExcelObject->getActiveSheet()->setCellValue('A'.$row,$user->getNom())
                ->setCellValue('B'.$row,$user->getPrenom())
                ->setCellValue('C'.$row, $user->getEmail());

            $row = $row + 2;
        }
       // $phpExcelObject->getActiveSheet()->removeRow($baseRow-1,1);

        $phpExcelObject->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $phpExcelObject->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $phpExcelObject->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        // Set $phpExcelObject sheet index to the first sheet, so Excel opens this as the first sheet

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=reponses.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');

        return $response;

    }

    /**
     * Finds and displays a Question entity.
     *
     * @Route("/{id}", name="question_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Question entity.
     *
     * @Route("/{id}/edit", name="question_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
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
    * Creates a form to edit a Question entity.
    *
    * @param Question $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Question $entity)
    {
        $form = $this->createForm(new QuestionType(), $entity, array(
            'action' => $this->generateUrl('question_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        
        // TODO lbrau: Voir avec Antoine pour la zone commentée.
//         $form
//                 ->add('submit', 'submit', array(
//                    'label' => 'Modifier',
//                    'attr' => array(
//                        'class' => 'btn btn-danger'
//                    ),
//                ))
//        ;

        return $form;
    }
    
    /**
     * Edits an existing Question entity.
     *
     * @Route("/{id}", name="question_update")
     * @Method("PUT")
     * @Template("AppAdminBundle:Question:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAdminBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('list_questions'));
        }

        return array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Question entity.
     *
     * @Route("/{id}", name="question_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppAdminBundle:Question')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Question entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('list_questions'));
    }
    
     /**
     * Delete Questions entity with or without their translations.
     *
     * @Route("/delete/{id}/{sEcraseAll}", name="question_delete_translation")
     */
    public function deleteQuestionListAction(Request $request = null, $id, $sEcraseAll = false)
    {
        $oEm     = $this->getDoctrine()->getManager();
        $entity  = $oEm->getRepository('AppAdminBundle:Question')->find($id);
        
        if (!$entity) {

            throw $this->createNotFoundException('Unable to find Field entity.');
        }
        
        
        // Si la demande vient du formulaire d'edition, on supprimera toutes les traductions liees a la question.
        if (false != $sEcraseAll) {

            // Recuperation de toutes les traductions 
            $oTranslationRepository   = $oEm->getRepository("AppAdminBundle:QuestionTranslation");
            $aTranslationFromQuestion = $oTranslationRepository->findBy(array('object' => $entity));
            
            foreach ($aTranslationFromQuestion as $oQuestionTranslate) {
                
                $oEm->remove($oQuestionTranslate);
                
            }
        } 
        
        $oEm->remove($entity);
        $oEm->flush();
        
        return $this->redirect($this->generateUrl('list_questions'));
    }
    
    /**
     * Delete Questions entity with or without their translations.
     *
     * @Route("/delete/translate/{iIdQuestion}/{iIdLangue}/", name="delete_translation_by_langue_id")
     */
    public function deleteQuestionTranslateByLangue($iIdQuestion, $iIdLangue) 
    {
        
        $oEm        = $this->getDoctrine()->getManager();
        $oLangue    = $oEm->getRepository("AppAdminBundle:Langue")->find($iIdLangue);
        $oQuestion  = $oEm->getRepository('AppAdminBundle:Question')->find($iIdQuestion);
        
         if (!$oQuestion) {

            throw $this->createNotFoundException('Unable to find Field entity.');
        }
        
        // Recuperation de toutes les traductions 
        $oTranslationRepository   = $oEm->getRepository("AppAdminBundle:QuestionTranslation");
        $aTranslationFromQuestion = $oTranslationRepository->findBy(array('object' => $oQuestion, 'langues' => $oLangue));

        foreach ($aTranslationFromQuestion as $oQuestionTranslate) {
            
            $oEm->remove($oQuestionTranslate);
        }
        
        $oEm->flush();
        
        return $this->redirect($this->generateUrl('list_questions'));

    }

    /**
     * Creates a form to delete a Question entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('question_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Delete',
                'attr'  => array(
                    'class' => 'btn btn-xs btn-danger'
                )))
            ->getForm()
        ;
    }
}
