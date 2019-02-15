<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RegistroType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres')
            ->add('apellidos')
            ->add('lugar')
            ->add('nacimiento','Symfony\Component\Form\Extension\Core\Type\DateType',array(
                'placeholder' => array(
                    'year' => 'Año',
                    'month' => 'Mes',
                    'day' => 'Día'),
                'years'=> range(1967,2001),
                'label'=>'Fecha de nacimiento',
                'required'=>true,

            ))
            ->add('pais', 'Symfony\Component\Form\Extension\Core\Type\CountryType',
                ["preferred_choices" => array('MX'),
                    'label' => 'address.form.country.label',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'address.form.country.placeholder'
                    ],
                    'label_attr' => [
                        'class' => 'col-sm-2 col-form-label'
                    ],
                ])
            ->add('email')
            ->add('universidad')
            ->add('estatus','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'Doctorado' => 'Doctorado',
                    'Postdoctorado' => 'Postdoctorado',
                    'Otro' => 'Otro',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Seleccionar',
            ))
            ->add('area', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',  array(
                'label' => 'Breve descripción de su área de investigación'
            ))
            ->add('grupos', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',  array(
                'label' => 'Lista de uno a tres grupos de investigación en los que gustaría participar, comenzando por su primera preferencia'
            ))
            ->add('publicaciones', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',  array(
                'label' => 'Lista de sus publicaciones (si las tiene), incluyendo aceptadas'
            ))
            ->add('proposito', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',  array(
                'label' => '¿Cuál es su propósito en asistir al taller?'
            ))
            ->add('lecturas', 'Symfony\Component\Form\Extension\Core\Type\CheckboxType', array(
                'required' => false,
            ))
            ->add('apoyo','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'Si' => 'Si',
                    'Preferible' => 'Preferible',
                    'No' => 'No',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Seleccionar',
            ))
            ->add('nombreProfesor', null, array(
                'label' =>'Nombre del asesor(a) de doctorado'
            ))
            ->add('emailProfesor', null, array(
                'label' =>'Email del asesor'
            ));

    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Registro'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_registro';
    }


}
