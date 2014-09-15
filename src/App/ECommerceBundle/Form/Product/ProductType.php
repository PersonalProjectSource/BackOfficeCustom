<?php

namespace App\ECommerceBundle\Form\Product;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\AdminBundle\Form\MediaType;
use App\ECommerceBundle\Form\Product\PriceType;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            /*->add('name', 'text', array('label' => 'Nom'))
            ->add('reference', 'text', array('label' => 'Référence'))
            ->add('quantity', 'number', array('label' => 'Quantité'))
            ->add('state', 'text', array('label' => 'Etat'))
            ->add('category', 'entity',
                array('label' => 'Catégories',
                    'class' => 'AppAdminBundle:Category',
                    'property' => 'title',
                    'multiple' => true,
                    'expanded'  => false))
            ->add('supplier', 'entity',
                array('label' => 'Fournisseur',
                    'required' => false,
                    'class' => 'AppECommerceBundle:Product\Supplier',
                    'property' => 'title',
                    'multiple' => true,
                    'expanded'  => false))
           ->add('price','collection', array('type' => new PriceType()))
           */
            ->add('medias', 'collection',array(
                'type' => 'text',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'prototype' => true,
            ))


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\ECommerceBundle\Entity\Product\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_ecommercebundle_product_form_product';
    }
}
