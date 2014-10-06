<?php

namespace App\ECommerceBundle\Form\DataTransformer;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

class ObjecttoCollectionTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    /**
     * Transforms an object (issue) to a string (id).
     *
     * @param  Object|null $object
     * @return string
     */
    public function transform($array)
    {
        $object = null;
        foreach($array as $a) {
            $object = $a;
        }
        return $object;
    }

    /**
     * Transforms a string (number) to an object (issue).
     *
     * @param  array $id
     * @return object|null
     * @throws TransformationFailedException if object (issue) is not found.
     */
    public function reverseTransform($object)
    {

        $array = new \Doctrine\Common\Collections\ArrayCollection();
        $array->add($object);

        return $array;
    }
}