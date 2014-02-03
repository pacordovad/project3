<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class MedidaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('figuraPk',"entity",array('class'=>"FrontendBundle:Figura","label"=>"Figura",
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.posicionFigura', 'ASC');
                }))
            ->add('largo',"text",array("label"=>"Alto"))
            ->add('ancho')
            ->add('posicion', "choice", array("choices"=>array_combine(range(1,30),range(1,30)),"label"=>"Posición"))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\Medida'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_medida';
    }
}
