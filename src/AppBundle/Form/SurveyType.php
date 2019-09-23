<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;




class SurveyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('s1q1','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'I would have preferred more conference-wide activities.' => 'I would have preferred more conference-wide activities.',
                    'I would have preferred more time to work in my project group.' => 'I would have preferred more time to work in my project group.',
                    'I liked the balance between conference-wide activities and time working in project groups.'=>'I liked the balance between conference-wide activities and time working in project groups.',
                    'Other' => 'Other',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>true,
                'expanded'=>true,
                'multiple'=>true,
            ))
            ->add('s1q1other','Symfony\Component\Form\Extension\Core\Type\TextType', array(
                'label' => 'Other',
                'required'=>true,
                'mapped' => false,
                'attr' => array(
                    'readonly' => true,
                ),
            ))

            ->add('s1q1b', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s1q2','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'I felt that I was able to summarize my research in three minutes.' => 'I felt that I was able to summarize my research in three minutes.',
                    'I felt that three minutes was too little time to describe my work to the group.' => 'I felt that three minutes was too little time to describe my work to the group.',
                    'I found it intimidating giving a three-minute talk on the first morning of the conference.'=>'I found it intimidating giving a three-minute talk on the first morning of the conference.',
                    'I thought that the three-minute talks were a nice way to get to know the other conference participants quickly.'=> 'I thought that the three-minute talks were a nice way to get to know the other conference participants quickly.',
                    'I would have preferred not to give a three-minute talk if given the option.'=>'I would have preferred not to give a three-minute talk if given the option.',
                    'I thought it was a waste of time to sit through three-minute talks on the first morning of the conference.'=>'I thought it was a waste of time to sit through three-minute talks on the first morning of the conference.',
                    'I would have found it more useful if the three-minute talks had taken place later in the week.'=>'I would have found it more useful if the three-minute talks had taken place later in the week.',
                    'Other' => 'Other',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>true,
                'expanded'=>true,
                'multiple'=>true,
            ))
            ->add('s1q2other','Symfony\Component\Form\Extension\Core\Type\TextType', array(
                'label' => 'Other',
                'mapped' => false,
                'required'=>true,
                'attr' => array(
                    'readonly' => true,
                ),
            ))
            ->add('s1q2b', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s1q3','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'I found it helpful hearing from faculty that work in a variety of different countries.' => 'I found it helpful hearing from faculty that work in a variety of different countries.',
                    'I would have liked to have seen faculty from more countries represented.' => 'I would have liked to have seen faculty from more countries represented.',
                    'I would have preferred if there were fewer panelists so that the panelists could have taken more questions.'=>'I would have preferred if there were fewer panelists so that the panelists could have taken more questions.',
                    'I would have liked to have heard from mathematicians in non-academic jobs.'=> 'I would have liked to have heard from mathematicians in non-academic jobs.',
                    'I did not find the career panel helpful.'=>'I did not find the career panel helpful.',
                    'I found the career panel to be helpful.'=>'I found the career panel to be helpful.',
                    'I would have preferred if the career panel hadn\'t been so late at night.'=>'I would have preferred if the career panel hadn\'t been so late at night.',
                    'I forgot to attend the career panel.'=>'I forgot to attend the career panel.',
                    'I chose not to attend the career panel.' => 'I chose not to attend the career panel.',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>true,
                'expanded'=>true,
                'multiple'=>true,
            ))
            ->add('s1q3b', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s1q4','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'I liked having a free afternoon.' => 'I liked having a free afternoon.',
                    'I would have preferred to spend Wednesday afternoon working with my project group.' => 'I would have preferred to spend Wednesday afternoon working with my project group.',
                    'I would have preferred to spend Wednesday afternoon in talks or other conference-wide activities.'=>'I would have preferred to spend Wednesday afternoon in talks or other conference-wide activities.',
                    'I went on one of the tours and I enjoyed it.'=> 'I went on one of the tours and I enjoyed it.',
                    'I went on one of the tours and did not enjoy it.'=>'I went on one of the tours and did not enjoy it.',
                    'I did not go on one of the tours but wish that I had.'=>'I did not go on one of the tours but wish that I had.',
                    'I did not go on one of the tours because they were too expensive.'=>'I did not go on one of the tours because they were too expensive.',
                    'I did not go on one of the tours because I had already taken them at other BIRS-CMO conferences in Oaxaca.'=>'I did not go on one of the tours because I had already taken them at other BIRS-CMO conferences in Oaxaca.',
                    'I might have gone on one of the tours if they had been less expensive.' => 'I might have gone on one of the tours if they had been less expensive.',
                    'I might have gone on one of the tours if there had been other destinations to choose from.'=>'I might have gone on one of the tours if there had been other destinations to choose from.',
                    'I liked the fact that there were two tours to choose from.'=>'I liked the fact that there were two tours to choose from.',
                    'I wish that there had only been one tour so that I could have spent the afternoon with more of the conference participants.'=>'I wish that there had only been one tour so that I could have spent the afternoon with more of the conference participants.',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>true,
                'expanded'=>true,
                'multiple'=>true,
            ))
            ->add('s1q4b', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s1q5','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'I enjoyed having a conference-wide activity on the last day.' => 'I enjoyed having a conference-wide activity on the last day.',
                    'I enjoyed learning about what all of the other groups worked on.' => 'I enjoyed learning about what all of the other groups worked on.',
                    'I enjoyed having the opportunity to share my group\'s progress with the other conference participants.'=>'I enjoyed having the opportunity to share my group\'s progress with the other conference participants.',
                    'I would have preferred to spend the last day working with my project group.'=> 'I would have preferred to spend the last day working with my project group.',
                    'I would have preferred to spend the last day writing a summary of our progress, to be handed in to the organizers, rather than spending three hours on presentations.'=>'I would have preferred to spend the last day writing a summary of our progress, to be handed in to the organizers, rather than spending three hours on presentations.',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>true,
                'expanded'=>true,
                'multiple'=>true,
            ))
            ->add('s1q5b', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q1','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3'=> '3',
                    '4'=> '4',
                    '5'=>'5',
                    '6'=>'6',
                    '7'=>'7',
                    '8'=>'8',
                    '9'=>'9',
                    '10'=>'10',

                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>false,
            ))

            ->add('s2q2','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                  'Too large'=>'Too large',
                  'Too small'=>'Too small',
                  'Just right'=>'Just right',
                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>false,
            ))

            ->add('s2q3','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'Yes'=>true,
                    'No'=>false,
                ),

                'placeholder' => 'Select',
                'required'=>false,
            ))
            ->add('s2q4', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q5', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q6', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q7', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q8', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q9', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q10','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'It was so nice to finally get to work on math in my native language!' => 'It was so nice to finally get to work on math in my native language!',
                    'It was a bit silly working in Spanish/Portunol since most papers are published in English nowadays.' => 'It was a bit silly working in Spanish/Portunol since most papers are published in English nowadays.',
                    'I found it challenging to work on math in Spanish/Portunol.'=>'I found it challenging to work on math in Spanish/Portunol.',
                    'I found it easy to work on math in Spanish/Portunol.'=> 'I found it easy to work on math in Spanish/Portunol.',
                    'I think it is important to have this workshop in Spanish/Portunol.'=>'I think it is important to have this workshop in Spanish/Portunol.',
                    'I think that this workshop should be held in English, but remain focused on mathematicians from Latin American countries.'=>'I think that this workshop should be held in English, but remain focused on mathematicians from Latin American countries.',
                    'My group struggled with communicating due to the emphasis on Spanish/Portunol.'=>'My group struggled with communicating due to the emphasis on Spanish/Portunol.',
                    'I found it unfair that the workshop emphasized Spanish and did not encourage collaboration in proper Portuguese or any other languages spoken in the Americas (English, French, Quechua, Zapoteca, etc.).'=>'I found it unfair that the workshop emphasized Spanish and did not encourage collaboration in proper Portuguese or any other languages spoken in the Americas (English, French, Quechua, Zapoteca, etc.).',
                    'Other'=>'Other'
                ),
                'choices_as_values' => true,
                'placeholder' => 'Select',
                'required'=>false,
                'expanded'=>true,
                'multiple'=>true,
            ))
            ->add('s2q10other','Symfony\Component\Form\Extension\Core\Type\TextType', array(
                'label' => 'Other',
                'mapped' => false,
                'required'=>false,
                'attr' => array(
                    'readonly' => true,
                ),
            ))
            ->add('s2q11', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q12', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('s2q13', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))

            ->add('s3q1', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'required'=>false,
            ))
            ->add('leader','Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'  => array(
                    'Yes'=>true,
                    'No'=>false,
                ),

                'placeholder' => 'Select',
                'required'=>true,
            ))
            ->add('stage','Symfony\Component\Form\Extension\Core\Type\TextType', array(

                'attr' => array(

                ),
            ))


        ;
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Survey'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_survey';
    }


}
