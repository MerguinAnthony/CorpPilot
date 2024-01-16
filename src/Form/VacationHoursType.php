<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VacationHoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('hours', NumberType::class, [
                'label' => 'Nombre d\'heures',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'form-row'],
                'label_attr' => ['class' => 'd-flex justify-content-center fc-2'], // Centrer le label
                'block_name' => 'hours_available_block', // Pour définir une référence au bloc
            ])
            ->add('submit', SubmitType::class, [
                'label' => '<img src="/assets/svg/submit1.svg" alt="Image" />',
                'label_html' => true,
                'attr' => ['class' => 'submit-btn'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
