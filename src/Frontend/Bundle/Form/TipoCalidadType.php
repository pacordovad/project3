<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoCalidadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreTipoCalidad')
            ->add('valor',"text",array("label"=>"Valor por centímetro cuadrado (USD)"))
            ->add('posicion',"choice", array("choices"=>array_combine(range(1,30),range(1,30)),"label"=>"Posición"))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\TipoCalidad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_tipocalidad';
    }
}
