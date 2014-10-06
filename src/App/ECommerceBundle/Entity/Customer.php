<?php

namespace App\ECommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\UserBundle\Entity\User;


/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="App\ECommerceBundle\Entity\CustomerRepository")
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\ECommerceBundle\Entity\Catalog", cascade={"persist"})
     */
    private $catalogs;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter;

    /**
     * @ORM\OneToOne(targetEntity="App\UserBundle\Entity\User", cascade={"persist"})
     */
    private $user;


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
     * Set gender
     *
     * @param string $gender
     * @return Customer
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     * @return Customer
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catalogs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add catalogs
     *
     * @param \App\ECommerceBundle\Entity\Catalog $catalogs
     * @return Customer
     */
    public function addCatalog(\App\ECommerceBundle\Entity\Catalog $catalogs)
    {
        $this->catalogs[] = $catalogs;

        return $this;
    }

    /**
     * Remove catalogs
     *
     * @param \App\ECommerceBundle\Entity\Catalog $catalogs
     */
    public function removeCatalog(\App\ECommerceBundle\Entity\Catalog $catalogs)
    {
        $this->catalogs->removeElement($catalogs);
    }

    /**
     * Get catalogs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }


    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


}
