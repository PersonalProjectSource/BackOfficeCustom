<?php

namespace App\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled', 'checkbox', array('label' => 'Activé', 'required' => false))
            ->add('username','text', array('label' => 'Identifiant'))
            ->add('email','email', array('label' => 'E-mail'))
            ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'first_options' => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Confirmer le mot de passe'),
                    'invalid_message' => 'Les mots de passe ne correspondent pas.',
            		'constraints' => array(
            				new Constraints\NotBlank(),
            		),
            ))
            ->add('groups','entity', array(
                'label' => 'Groupes',
                'class' => 'AppUserBundle:Group',
                'property' => 'name',
                'required'  => true,
                'multiple' => true,
                'expanded'  => false,
            ))
        ;
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_user_form_user';
    }
}
