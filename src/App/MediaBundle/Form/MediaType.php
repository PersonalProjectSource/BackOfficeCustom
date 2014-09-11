<?php

namespace App\MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MediaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD:src/App/AdminBundle/Form/ProductType.php
            ->add('name', 'text', array('label'=>'toto'))
            // ->add('media')
            // ->add('reference')
            // ->add('quantity')
            // ->add('state')
            // ->add('slug')
=======
            ->add('name', 'text', array("label" => "Nom"))
            ->add('file','file', array('label' => 'Fichier'))
>>>>>>> 147d1e28ccac8c54599b1de8c27876c0a2bf0b1b:src/App/MediaBundle/Form/MediaType.php
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\MediaBundle\Entity\Media'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_adminbundle_media';
    }
}
