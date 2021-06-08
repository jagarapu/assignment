<?php

namespace App\Form;

use App\Entity\Batch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BatchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('birthYear', DateType::class,
                [
                    'widget' => 'single_text',
                    'attr' => [
                        'class' => 'date-picker',
                        'size' => 10,
                    ],
                    'format' => 'yyyy',
                ])
            ->add('issueYear', DateType::class,
                [
                    'widget' => 'single_text',
                    'attr' => [
                        'class' => 'date-picker',
                        'size' => 10,
                    ],
                    'format' => 'yyyy',
                ])
            ->add('expirationYear', DateType::class,
                [
                    'widget' => 'single_text',
                    'attr' => [
                        'class' => 'date-picker',
                        'size' => 10,
                    ],
                    'format' => 'yyyy',
                ])
            ->add('height',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('hairColor',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('eyeColor',TextType::class,[
                'attr' => ['class' => 'form-control',
                ],
            ])
            ->add('passportId',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('countryId',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Batch::class,
            'validation_groups' => [ 'batch'],
        ]);
    }
}
