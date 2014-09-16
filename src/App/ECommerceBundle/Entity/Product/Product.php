<?php

namespace App\ECommerceBundle\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
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
     * @return mixed
     */
    public function getMedias()
    {
        return $this->medias;
    }


    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $medias
     */
    public function setMedias(\Doctrine\Common\Collections\ArrayCollection $medias)
    {
        foreach ($medias as $media) {
            $media->addProduct($this);
        }
        $this->medias = $medias;
    }




}
