<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionTranslation
 *
 * @ORM\Table(name="question_translation")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\QuestionTranslationRepository")
 */
class QuestionTranslation
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     * @ORM\Column(name="reponse1", type="string", length=255, nullable=true)
     */
    private $reponse1;

    /**
     * @var string
     * @ORM\Column(name="reponse2", type="string", length=255, nullable=true)
     */
    private $reponse2;

    /**
     * @var string
     * @ORM\Column(name="reponse3", type="string", length=255, nullable=true)
     */
    private $reponse3;

    /**
     * @var string
     * @ORM\Column(name="reponse4", type="string", length=255, nullable=true)
     */
    private $reponse4;

    /**
     * @var string
     * @ORM\Column(name="reponse5", type="string", length=255, nullable=true)
     */
    private $reponse5;

    /**
     * @var string
     * @ORM\Column(name="reponse6", type="string", length=255, nullable=true)
     */
    private $reponse6;


    /**
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Question", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;


    /**
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Langue", inversedBy="questions")
     * @ORM\JoinTable(name="questiontranslation_langue")
     */
    protected $langues;


    public function __construct() {
        $this->langues = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param int $object_id
     */
    public function setObjectId($object_id)
    {
        $this->object_id = $object_id;
    }

    /**
     * @return int
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Question
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
    public function addQuestion($question)
    {
       $this->setObject($question);
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }


    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $langues
     */
    public function setLangue($langues)
    {
        $this->langues = $langues;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->langues;
    }

    /**
     * @param string $reponse1
     */
    public function setReponse1($reponse1)
    {
        $this->reponse1 = $reponse1;
    }

    /**
     * @return string
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * @param string $reponse2
     */
    public function setReponse2($reponse2)
    {
        $this->reponse2 = $reponse2;
    }

    /**
     * @return string
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * @param string $reponse3
     */
    public function setReponse3($reponse3)
    {
        $this->reponse3 = $reponse3;
    }

    /**
     * @return string
     */
    public function getReponse3()
    {
        return $this->reponse3;
    }

    /**
     * @param string $reponse4
     */
    public function setReponse4($reponse4)
    {
        $this->reponse4 = $reponse4;
    }

    /**
     * @return string
     */
    public function getReponse4()
    {
        return $this->reponse4;
    }

    /**
     * @param string $reponse5
     */
    public function setReponse5($reponse5)
    {
        $this->reponse5 = $reponse5;
    }

    /**
     * @return string
     */
    public function getReponse5()
    {
        return $this->reponse5;
    }

    /**
     * @param string $reponse6
     */
    public function setReponse6($reponse6)
    {
        $this->reponse6 = $reponse6;
    }

    /**
     * @return string
     */
    public function getReponse6()
    {
        return $this->reponse6;
    }


}
