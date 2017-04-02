<?php

namespace Dita\TrackingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address1')
            ->add('address2')
            ->add('address3')
            ->add('address4')
            ->add('city')
            ->add('country')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('comment')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dita\TrackingBundle\Document\Address'
        ));
    }

    public function getName()
    {
        return 'dita_trackingbundle_addresstype';
    }
}
