<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\QuestionRepository")
 */
class Question
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
   * @ORM\OneToMany(targetEntity="App\AdminBundle\Entity\QuestionUserHermes", mappedBy="question", cascade={"persist"})
   */
    private $questionUserHermes;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="App\AdminBundle\Entity\QuestionTranslation", mappedBy="object", cascade={"persist"})
     */
    protected $translations;


    public function __construct() {
        $this->translations =  new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $translations
     */
    public function setTranslations($translations)
    {
        foreach ($translations as $translation) {
            $translation->addQuestion($this);
        }
        $this->translations = $translations;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTranslations()
    {
        return $this->translations;
    }


    /**
     * Add questionUserHermes
     *
     * @param \App\AdminBundle\Entity\QuestionUserHermes $questionUserHermes
     * @return Question
     */
    public function addQuestionUserHerme(\App\AdminBundle\Entity\QuestionUserHermes $questionUserHermes)
    {
        $this->questionUserHermes[] = $questionUserHermes;

        return $this;
    }

    /**
     * Remove questionUserHermes
     *
     * @param \App\AdminBundle\Entity\QuestionUserHermes $questionUserHermes
     */
    public function removeQuestionUserHerme(\App\AdminBundle\Entity\QuestionUserHermes $questionUserHermes)
    {
        $this->questionUserHermes->removeElement($questionUserHermes);
    }

    /**
     * Get questionUserHermes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestionUserHermes()
    {
        return $this->questionUserHermes;
    }

    /**
     * Add translations
     *
     * @param \App\AdminBundle\Entity\QuestionTranslation $translations
     * @return Question
     */
    public function addTranslation(\App\AdminBundle\Entity\QuestionTranslation $translations)
    {
        $translations->setObject($this);
        $this->translations[] = $translations;

        return $this;
    }

    /**
     * Remove translations
     *
     * @param \App\AdminBundle\Entity\QuestionTranslation $translations
     */
    public function removeTranslation(\App\AdminBundle\Entity\QuestionTranslation $translations)
    {
        $this->translations->removeElement($translations);
    }
}
