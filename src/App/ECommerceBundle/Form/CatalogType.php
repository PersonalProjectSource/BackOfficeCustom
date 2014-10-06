<?php

namespace App\ECommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CatalogType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
//            ->add('products', 'entity', array(
//                'class' => "App\ECommerceBundle\Entity\Product\Product",
//            ))
                
            ->add('products', 'collection', array(
                'type' => new Product\ProductType(),
            ))
                
            ->add('customers')
            ->add('country')
        ;
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\ECommerceBundle\Entity\Catalog'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_ecommercebundle_catalog';
    }
}
