<?php

namespace App\ECommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalog
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\ECommerceBundle\Entity\CatalogRepository")
 */
class Catalog
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
     * @ORM\ManyToMany(targetEntity="App\ECommerceBundle\Entity\Product\Product", cascade={"persist"})
     */
    private $products;
    
    /**
     * @ORM\ManyToMany(targetEntity="App\ECommerceBundle\Entity\Customer", cascade={"persist"})
     */
    private $customers;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return Catalog
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add products
     *
     * @param \App\ECommerceBundle\Entity\Product\Product $products
     * @return Catalog
     */
    public function addProduct(\App\ECommerceBundle\Entity\Product\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \App\ECommerceBundle\Entity\Product\Product $products
     */
    public function removeProduct(\App\ECommerceBundle\Entity\Product\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add customers
     *
     * @param \App\ECommerceBundle\Entity\Customer $customers
     * @return Catalog
     */
    public function addCustomer(\App\ECommerceBundle\Entity\Customer $customers)
    {
        $this->customers[] = $customers;

        return $this;
    }

    /**
     * Remove customers
     *
     * @param \App\ECommerceBundle\Entity\Customer $customers
     */
    public function removeCustomer(\App\ECommerceBundle\Entity\Customer $customers)
    {
        $this->customers->removeElement($customers);
    }

    /**
     * Get customers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomers()
    {
        return $this->customers;
    }
}
