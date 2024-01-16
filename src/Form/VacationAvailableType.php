<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VacationAvailableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('startDate', DateType::class, [
                'label' => 'Début',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control js-datepicker'],
                'row_attr' => ['class' => 'form-row'],
                'label_attr' => ['class' => 'd-flex justify-content-center fc-2'], // Centrer le label
                'block_name' => 'start_date_block', // Pour définir une référence au bloc
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Fin',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control js-datepicker'],
                'row_attr' => ['class' => 'form-row'],
                'label_attr' => ['class' => 'd-flex justify-content-center fc-2'], // Centrer le label
                'block_name' => 'end_date_block', // Pour définir une référence au bloc
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
