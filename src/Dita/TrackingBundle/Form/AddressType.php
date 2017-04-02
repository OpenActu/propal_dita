<?php

namespace Dita\TrackingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyname',TextType::class)
            ->add('address1',TextType::class)
            ->add('address2',TextType::class,array('required' => false))
            ->add('address3',TextType::class,array('required' => false))
            ->add('address4',TextType::class,array('required' => false))
            ->add('city',TextType::class)
            ->add('country',TextType::class)
            ->add('phone',TextType::class,array('required' => false))
            ->add('fax',TextType::class,array('required' => false))
            ->add('email',EmailType::class,array('required' => false))
            ->add('comment',TextareaType::class,array('required' => false))
            ->add('submit',SubmitType::class)
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
