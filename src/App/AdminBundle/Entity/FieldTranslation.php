<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldTranslation
 *
 * @ORM\Table(name="field_translation")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\FieldTranslationRepository")
 */
class FieldTranslation
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
    * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Langue")
    */
    private $langue;
    
    /**
    * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Field", inversedBy="fieldTranslation")
    * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
    */
    protected $object;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;


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
     * Set langue
     *
     * @param string $langue
     * @return FieldTranslation
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return FieldTranslation
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
    
    public function addField($field) {
        $this->setObject($field);
        return $this;
    }

    /**
     * Set object
     *
     * @param \App\AdminBundle\Entity\Field $object
     * @return FieldTranslation
     */
    public function setObject(\App\AdminBundle\Entity\Field $object = null)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * Get object
     *
     * @return \App\AdminBundle\Entity\Field 
     */
    public function getObject()
    {
        return $this->object;
    }
}
