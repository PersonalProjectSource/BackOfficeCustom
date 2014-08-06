<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="admin_dash")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => "");
    }
    
    
    /**
     * Retourne les informations de la page sous forme de Json.
     * @Route("/home", name="home")
     */
    public function frontConnexionAction() {
       
        // Recuperation des champs de la base coté Json.
        //TODO lbrau: export json des champs traduit
        //TODO SESSION
        $oEm                          = $this->getDoctrine()->getManager();
        $oFieldRepository             = $oEm->getRepository("AppAdminBundle:Field");
        $oFieldsTranslationRepository = $oEm->getRepository('AppAdminBundle:FieldTranslation');
                
        $langues = $oEm->getRepository('AppAdminBundle:Langue')->findAll();
        $aFields = $oFieldRepository->findAll();
        
//        var_dump(count($aFields));
//        var_dump(count($langues));

        //$aFieldsTranslation = $oFieldRepository->findAll();
        
        var_dump("<PRE>",$aFieldsTranslation[0]);
        die;
        
        $aFieldToJsonExport = array();
        
         foreach($langues as $langue) {
            foreach ($aFields as $oField) {
                echo "a";
//                var_dump("valeur passé : 1-", $langue->getLibelle(), "valeur passé 2-", $oField->getCle());
                $oFieldTranslation = $oFieldsTranslationRepository
                        ->findOneBy(array('langue'=>$langue, 'object'=>$oField));
                
                var_dump($oFieldTranslation);

                //$aFieldToJsonExport['field_list'][$oFieldTranslation->getObject()->getCle()] = $oFieldTranslation;
            }
            
         }
         
        
//        $response = new Response(json_encode(array('name' => $aFieldToJsonExport)));
//        $response->headers->set('Content-Type', 'application/json');
//        
//        return $response;
    }
}
