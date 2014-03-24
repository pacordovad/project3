<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class PedidoProductoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreProducto')
            ->add('cantidad')
            ->add('alto')
            ->add('ancho')
            ->add('cortesia')
            ->add('precioVenta')
            ->add('tipoCalidadPk','entity',array('class'=>'FrontendBundle:TipoCalidad','label'=>"Calidad",
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.posicion', 'ASC');
                }))
            //->add('pedidoPk')
            ->add('productoPk')
            ->add('medidaPk','entity',array('class'=>'FrontendBundle:Medida','label'=>"Dimensiones",'empty_value' => 'No estándar', 'required' => false,
                'query_builder' => function(EntityRepository $er) {
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
            'data_class' => 'Frontend\Bundle\Entity\PedidoProducto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_pedidoproducto';
    }
}
