<?php

namespace App\ECommerceBundle\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use App\AdminBundle\Entity\AbstractDefault;
use App\MediaBundle\Entity\Media;

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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description_short", type="text")
     */
    private $description_short;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="App\MediaBundle\Entity\Media", mappedBy="products", cascade={"persist"})
     */
    private $medias;




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
     * Constructor
     */
    public function __construct()
    {
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description_short
     */
    public function setDescriptionShort($description_short)
    {
        $this->description_short = $description_short;
    }

    /**
     * @return string
     */
    public function getDescriptionShort()
    {
        return $this->description_short;
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


    public function getMedias()
    {
        return $this->medias;
    }
    public function setMedias(\Doctrine\Common\Collections\ArrayCollection $medias)
    {
        foreach ($medias as $media) {
            $media->addProduct($this);
        }
        $this->medias = $medias;
    }
    public function removeMedias(Media $media)
    {
        $this->medias->removeElement($media);
    }

}
