<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyName', TextType::class, [
                'label' => 'Nom de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Nom de l\'entreprise',
                    'class' => 'form-control',
                ]
            ])
            ->add('companyAbrev', TextType::class, [
                'label' => 'Nom de votre plateforme',
                'attr' => [
                    'placeholder' => 'ex : MyCompanyGest',
                    'class' => 'form-control',
                ]
            ])
            ->add('companyPhone', TextType::class, [
                'label' => 'Numéro de téléphone de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Numéro de téléphone de l\'entreprise',
                    'class' => 'form-control',
                ]
            ])
            ->add('companyAddress', TextType::class, [
                'label' => 'Adresse de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Adresse de l\'entreprise',
                    'class' => 'form-control',
                ]
            ])
            ->add('companyCity', TextType::class, [
                'label' => 'Ville de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Ville de l\'entreprise',
                    'class' => 'form-control',
                ]
            ])
            ->add('companyZipcode', TextType::class, [
                'label' => 'Code postal de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Code postal de l\'entreprise',
                    'class' => 'form-control',
                ]
            ])
            ->add('companyEmail', EmailType::class, [
                'label' => 'Email de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Email de l\'entreprise',
                    'class' => 'form-control',
                ]
            ])
            ->add('companySiret', IntegerType::class, [
                'label' => 'Numéro de SIRET de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Numéro de SIRET de l\'entreprise',
                    'class' => 'form-control',
                ]
            ])
            ->add('companyLogoFile', VichFileType::class, [
                'label' => 'Logo de l\'entreprise',
                'required' => false,
                'allow_delete' => false,
                'download_uri' => false,
                'attr' => [
                    'placeholder' => 'Logo de l\'entreprise',
                    'class' => 'form-control',
                ],
            ])
            ->add('signatureFile', VichFileType::class, [
                'label' => 'Signature',
                'required' => false,
                'allow_delete' => false,
                'download_uri' => false,
                'download_label' => false,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-primary mt-4',
                ],
            ])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => [
                    new Recaptcha3(),
                ],
                'action_name' => 'homepage',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Company',
        ]);
    }
}
