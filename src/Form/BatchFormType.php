<?php

namespace App\Form;

use App\Entity\Batch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BatchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('birthYear', NumberType::class,
                [
                    'attr' => ['class' => 'form-control'],
                ])
            ->add('issueYear', NumberType::class,
                [
                    'attr' => ['class' => 'form-control'],
                ])
            ->add('expirationYear', NumberType::class,
                [
                    'attr' => ['class' => 'form-control'],
                ])
            ->add('height',TextType::class,[
                'attr' => ['class' => 'form-control',
                ]
            ])
            ->add('hairColor',TextType::class,[
                'attr' => ['class' => 'form-control',
                ]
            ])
            ->add('eyeColor',TextType::class,[
                'attr' => ['class' => 'form-control',
                ],
            ])
            ->add('passportId',TextType::class,[
                'attr' => ['class' => 'form-control',
                ],
            ])
            ->add('countryId',TextType::class,[
                'attr' => ['class' => 'form-control',
                ],
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
