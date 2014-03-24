<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AreaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreArea','text',array('label'=>"Nombre área"))
            ->add('codigo')
            ->add('empresaPk','entity',array('class'=>'FrontendBundle:Empresa','label'=>"Empresa"
                ,'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.posicion', 'ASC');
                }))
            ->add('posicion', "choice", array("choices"=>array_combine(range(1,200),range(1,200)),"label"=>"Posición"))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\Area'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_area';
    }
}
