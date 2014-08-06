<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Field
 *
 * @ORM\Table(name="field")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\FieldRepository")
 */
class Field
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
    * @var \Doctrine\Common\Collections\ArrayCollection
    * @ORM\OneToMany(targetEntity="App\AdminBundle\Entity\FieldTranslation", mappedBy="object",cascade={"persist"})
    */
    protected $fieldTranslation;

    /**
     * @var string
     *
     * @ORM\Column(name="cle", type="string", length=255)
     */
    private $cle;

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
     * Set cle
     *
     * @param string $cle
     * @return Field
     */
    public function setCle($cle)
    {
        $this->cle = $cle;

        return $this;
    }

    /**
     * Get cle
     *
     * @return string 
     */
    public function getCle()
    {
        return $this->cle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fieldTranslation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fieldTranslation
     *
     * @param \App\AdminBundle\Entity\FieldTranslation $fieldTranslation
     * @return Field
     */
    public function addFieldTranslation(\App\AdminBundle\Entity\FieldTranslation $fieldTranslation)
    {
        $fieldTranslation->setObject($this);
        $this->fieldTranslation[] = $fieldTranslation;

        return $this;
    }

    /**
     * Remove fieldTranslation
     *
     * @param \App\AdminBundle\Entity\FieldTranslation $fieldTranslation
     */
    public function removeFieldTranslation(\App\AdminBundle\Entity\FieldTranslation $fieldTranslation)
    {
        $this->fieldTranslation->removeElement($fieldTranslation);
    }

    /**
     * Get fieldTranslation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFieldTranslation()
    {
        return $this->fieldTranslation;
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $translations
     */
    public function setFieldTranslation($fieldTranslation)
    {
        foreach ($fieldTranslation as $translation) {
            $translation->addField($this);
        }
        $this->fieldTranslation = $fieldTranslation;
    }
    
    public function __toString() {
        return $this->getCle();
    }
}
