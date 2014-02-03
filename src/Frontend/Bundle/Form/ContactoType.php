<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('areaPk','entity',array('class'=>'FrontendBundle:Area','label'=>"Área",'property'=>'empresaArea'))
            ->add('nombresContacto','text',array('label'=>'Nombres'))
            ->add('apellidosContacto','text',array('label'=>'Apellidos'))
            ->add('cargoPk','entity',array('class'=>'FrontendBundle:Cargo','label'=>"Cargo"))
            ->add('ciudadPk','entity',array('class'=>'FrontendBundle:Ciudad','label'=>"Ciudad",'property'=>'ciudadPais'))
            ->add('telefono','text',array('label'=>'Teléfono convencional','required'=>false))
            ->add('extension','text',array('label'=>'Extensión','required'=>false))
            ->add('celular1','text',array('label'=>'Cel. Movistar','required'=>false))
            ->add('celular2','text',array('label'=>'Cel. Porta','required'=>false))
            ->add('correoTrabajo','email',array('label'=>'Correo trabajo','required'=>false))
            ->add('correoAlternativo','email',array('label'=>'Correo convencional','required'=>false))
            ->add('observaciones')
            ->add('posicion', "choice", array("choices"=>array_combine(range(1,30),range(1,30)),"label"=>"Posición"))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\Contacto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_contacto';
    }
}
