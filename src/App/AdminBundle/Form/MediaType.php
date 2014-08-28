<?php

namespace App\AdminBundle\Form;

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
            ->add('libelle', 'text', array("label" => "Libellé"))
            ->add('dateCreation', 'date', array(
                    'label' => 'Date de création',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'disabled' => true,
                    'data' => new \DateTime("now")))
            ->add('file','file', array('label' => 'Fichier'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Media'
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
