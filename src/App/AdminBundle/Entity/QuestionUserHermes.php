<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionUserHermes
 *
 * @ORM\Table(name="question_userhermes")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\QuestionUserHermesRepository")
 */
class QuestionUserHermes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
   * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\HermesUser", inversedBy="userHermesQuestion", cascade={"persist"})
   */
    private $usersHermes;
    
    /**
   * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Question", inversedBy="questionUserHermes", cascade={"persist"})
   */
    private $question;
    
    /**
    * @var string
    *
    * @ORM\Column(name="contenu", type="text", nullable=true)
    */
   private $contenu;

    /**
    * @var boolean $reponse1
    *
    * @ORM\Column(name="reponse1", type="boolean", nullable=true)
    */
    private $reponse1;

    /**
     * @var boolean $reponse2
     *
     * @ORM\Column(name="reponse2", type="boolean", nullable=true)
     */
    private $reponse2;

    /**
     * @var boolean $reponse3
     *
     * @ORM\Column(name="reponse3", type="boolean", nullable=true)
     */
    private $reponse3;

    /**
     * @var boolean $reponse4
     *
     * @ORM\Column(name="reponse4", type="boolean", nullable=true)
     */
    private $reponse4;

    /**
     * @var boolean $reponse5
     *
     * @ORM\Column(name="reponse5", type="boolean", nullable=true)
     */
    private $reponse5;

    /**
     * @var boolean $reponse6
     *
     * @ORM\Column(name="reponse6", type="boolean", nullable=true)
     */
    private $reponse6;
   
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usersHermes
     *
     * @param \App\AdminBundle\Entity\HermesUser $usersHermes
     * @return QuestionUserHermes
     */
    public function setUsersHermes(\App\AdminBundle\Entity\HermesUser $usersHermes = null)
    {
        $this->usersHermes = $usersHermes;

        return $this;
    }

    /**
     * Get usersHermes
     *
     * @return \App\AdminBundle\Entity\HermesUser 
     */
    public function getUsersHermes()
    {
        return $this->usersHermes;
    }

    /**
     * Set question
     *
     * @param \App\AdminBundle\Entity\Question $question
     * @return QuestionUserHermes
     */
    public function setQuestion(\App\AdminBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \App\AdminBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return QuestionUserHermes
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param boolean $reponse1
     */
    public function setReponse1($reponse1)
    {
        $this->reponse1 = $reponse1;
    }

    /**
     * @return boolean
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * @param boolean $reponse2
     */
    public function setReponse2($reponse2)
    {
        $this->reponse2 = $reponse2;
    }

    /**
     * @return boolean
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * @param boolean $reponse3
     */
    public function setReponse3($reponse3)
    {
        $this->reponse3 = $reponse3;
    }

    /**
     * @return boolean
     */
    public function getReponse3()
    {
        return $this->reponse3;
    }

    /**
     * @param boolean $reponse4
     */
    public function setReponse4($reponse4)
    {
        $this->reponse4 = $reponse4;
    }

    /**
     * @return boolean
     */
    public function getReponse4()
    {
        return $this->reponse4;
    }

    /**
     * @param boolean $reponse5
     */
    public function setReponse5($reponse5)
    {
        $this->reponse5 = $reponse5;
    }

    /**
     * @return boolean
     */
    public function getReponse5()
    {
        return $this->reponse5;
    }

    /**
     * @param boolean $reponse6
     */
    public function setReponse6($reponse6)
    {
        $this->reponse6 = $reponse6;
    }

    /**
     * @return boolean
     */
    public function getReponse6()
    {
        return $this->reponse6;
    }


}
