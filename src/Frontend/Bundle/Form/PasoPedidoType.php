<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PasoPedidoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrePaso')
            ->add('posicion', "choice", array("choices"=>array_combine(range(1,200),range(1,200)),"label"=>"Posición"))
            ->add('porDefecto','checkbox', array('label'=> 'Es el paso por defecto?','required'  => false,))
            ->add('visibleWeb','checkbox', array('label'=> 'Es visible desde la web?','required'  => false,))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\PasoPedido'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_pasopedido';
    }
}
