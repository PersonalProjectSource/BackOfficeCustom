<?php

namespace App\ECommerceBundle\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use App\AdminBundle\Entity\AbstractDefault;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity()
 */
class Product extends AbstractDefault
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
     * @ORM\ManyToOne(targetEntity="App\ECommerceBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="Feature", mappedBy="product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="feature_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $feature;

    /**
     * @ORM\ManyToMany(targetEntity="Supplier", mappedBy="product", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     * })
     */
    private $supplier;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=255)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;


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
     * @return Product
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
     * Set reference
     *
     * @param string $reference
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Product
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Product
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param mixed $feature
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;
    }

    /**
     * @return mixed
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->feature = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supplier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set media
     *
     * @param string $media
     * @return Product
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Add feature
     *
     * @param \App\ECommerceBundle\Entity\Product\Feature $feature
     * @return Product
     */
    public function addFeature(\App\ECommerceBundle\Entity\Product\Feature $feature)
    {
        $this->feature[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \App\ECommerceBundle\Entity\Product\Feature $feature
     */
    public function removeFeature(\App\ECommerceBundle\Entity\Product\Feature $feature)
    {
        $this->feature->removeElement($feature);
    }

    /**
     * Add supplier
     *
     * @param \App\ECommerceBundle\Entity\Product\Supplier $supplier
     * @return Product
     */
    public function addSupplier(\App\ECommerceBundle\Entity\Product\Supplier $supplier)
    {
        $this->supplier[] = $supplier;

        return $this;
    }

    /**
     * Remove supplier
     *
     * @param \App\ECommerceBundle\Entity\Product\Supplier $supplier
     */
    public function removeSupplier(\App\ECommerceBundle\Entity\Product\Supplier $supplier)
    {
        $this->supplier->removeElement($supplier);
    }
}
