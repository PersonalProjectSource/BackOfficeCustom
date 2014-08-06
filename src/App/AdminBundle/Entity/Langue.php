<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\LangueRepository")
 */
class Langue
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;

    /**
    * @var string
    *
    * @ORM\Column(name="code", type="string", length=50)
    *
    */
    private $code;

    /**
     * @ORM\OneToMany(targetEntity="App\AdminBundle\Entity\QuestionTranslation", mappedBy="langues")
     */
    private $questions;

    public function __construct() {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString() {
        return $this->libelle;
    }


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
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $questions
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }

    /**
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add questions
     *
     * @param \App\AdminBundle\Entity\QuestionTranslation $questions
     * @return Langue
     */
    public function addQuestion(\App\AdminBundle\Entity\QuestionTranslation $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \App\AdminBundle\Entity\QuestionTranslation $questions
     */
    public function removeQuestion(\App\AdminBundle\Entity\QuestionTranslation $questions)
    {
        $this->questions->removeElement($questions);
    }
}
