<?php

namespace App\ECommerceBundle\Form\SAV;

use App\ECommerceBundle\Form\DataTransformer\ObjecttoCollectionTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\ECommerceBundle\Form\SAV\MessageType;

class TicketType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $entityManager = $options['em'];
        $transformer = new ObjecttoCollectionTransformer($entityManager);

        $builder
            ->add('email')
            ->add('type', 'choice', array(
                'label' => 'Objet',
                'choices' => array('Service client' => 'Service Client',
                    'Webmaster' => 'Webmaster'),
                'expanded' => false,
                'multiple' => false,
                'required' => true
            ))

            ->add(
                $builder->create('messages', new MessageType())
                    ->addModelTransformer($transformer)
            )

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\ECommerceBundle\Entity\SAV\Ticket',
            'cascade_validation' => true,

        ));
        $resolver->setRequired(array(
                'em',
            ));
        $resolver->setAllowedTypes(array(
                'em' => 'Doctrine\Common\Persistence\ObjectManager',
            ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_ecommercebundle_sav_ticket';
    }
}
