<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rolPk','entity',array('class'=>"FrontendBundle:Rol",'label'=>"Rol"))
            ->add('nombres')
            ->add('apellidos')
            ->add('cedula')
            ->add('fechaNacimiento','date',array('years'=>range(1900,date('Y'))))
            ->add('cargoPk','entity',array('class'=>"FrontendBundle:Cargo",'label'=>"Cargo"))
            ->add('usuario')
            ->add('clave','repeated',array(
                'type' => 'password',
                'invalid_message' => 'Las claves deben coincidir.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Clave'),
                'second_options' => array('label' => 'Repita la clave'),
            ))            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_usuario';
    }
}
