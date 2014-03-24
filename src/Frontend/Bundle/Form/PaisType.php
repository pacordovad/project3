<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaisType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrePais',"text",array('label'=>"Nombre país"))
            ->add('posicion', "choice", array("choices"=>array_combine(range(1,200),range(1,200)),"label"=>"Posición"))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\Pais'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_pais';
    }
}
