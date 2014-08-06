<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HermesUser
 *
 * @ORM\Table(name="hermesuser")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\HermesUserRepository")
 */
class HermesUser
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
   * @ORM\OneToMany(targetEntity="App\AdminBundle\Entity\QuestionUserHermes", mappedBy="usersHermes", cascade={"persist"})
   */
    private $userHermesQuestion;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="hermesid", type="string", length=150)
     */
    private $hermesid;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="end", type="boolean")
     */
    private $end;


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
     * Set nom
     *
     * @param string $nom
     * @return HermesUser
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return HermesUser
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return HermesUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponses
     *
     * @param \App\AdminBundle\Entity\Reponse $reponses
     *
     * @return HermesUser
     */
    public function addReponse(\App\AdminBundle\Entity\Reponse $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Add userHermesQuestion
     *
     * @param \App\AdminBundle\Entity\QuestionUserHermes $userHermesQuestion
     * @return HermesUser
     */
    public function addUserHermesQuestion(\App\AdminBundle\Entity\QuestionUserHermes $userHermesQuestion)
    {
        $this->userHermesQuestion[] = $userHermesQuestion;

        return $this;
    }

    /**
     * Remove userHermesQuestion
     *
     * @param \App\AdminBundle\Entity\QuestionUserHermes $userHermesQuestion
     */
    public function removeUserHermesQuestion(\App\AdminBundle\Entity\QuestionUserHermes $userHermesQuestion)
    {
        $this->userHermesQuestion->removeElement($userHermesQuestion);
    }

    /**
     * Get userHermesQuestion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserHermesQuestion()
    {
        return $this->userHermesQuestion;
    }

    /**
     * @param string $hermesid
     */
    public function setHermesid($hermesid)
    {
        $this->hermesid = $hermesid;
    }

    /**
     * @return string
     */
    public function getHermesid()
    {
        return $this->hermesid;
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
     * @param boolean $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * @return boolean
     */
    public function getEnd()
    {
        return $this->end;
    }



}
