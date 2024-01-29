<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Vacation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VacationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('startDate', DateType::class, [
                'label' => 'Début',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control js-datepicker'],
                'row_attr' => ['class' => 'form-row'],
                'label_attr' => ['class' => 'd-flex justify-content-center fc-2'],
                'block_name' => 'start_date_block',
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Fin',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control js-datepicker'],
                'row_attr' => ['class' => 'form-row'],
                'label_attr' => ['class' => 'd-flex justify-content-center fc-2'],
                'block_name' => 'end_date_block',
            ])
            ->add('startHours', TimeType::class, [
                'label' => 'Début',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control js-datepicker'],
                'row_attr' => ['class' => 'form-row'],
                'label_attr' => ['class' => 'd-flex justify-content-center fc-2'],
                'block_name' => 'start_date_block',
                'required' => false,
            ])
            ->add('endHours', TimeType::class, [
                'label' => 'Fin',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control js-datepicker'],
                'row_attr' => ['class' => 'form-row'],
                'label_attr' => ['class' => 'd-flex justify-content-center fc-2'],
                'block_name' => 'start_date_block',
                'required' => false,
            ])
            ->add('account', ChoiceType::class, [
                'label' => 'Choisissez votre compte',
                'choices' => [
                    'Jour de congé classique' => 1,
                    'Compte épargne temps' => 2,
                    'Heures' => 3,
                ],
                'attr' => ['class' => 'form-select w-75 d-block mx-auto mb-4'],
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
            'data_class' => Vacation::class,
        ]);
    }
}
