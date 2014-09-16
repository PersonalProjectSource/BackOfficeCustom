<?php

namespace App\UserBundle\Services;


class RolesService {

    private $roles;

    public function __construct($hierarchy = array()) {
        $this->roles = $this->setRoles($hierarchy);
    }

    public function setRoles($hierarchy = array()){
        $roles = array();
        //var_dump($hierarchy);die;
        //$this->get('security.context')->getToken()->getUser()
        foreach ($hierarchy as $key => $row) {
            foreach ($row as $key => $haystack) {
                if(!in_array($haystack, $roles)) {
                    $roles[$haystack] =  $haystack;
                }
            }
        }
        return $roles;
    }
    public function getRoles(){
        return $this->roles;
    }
}


