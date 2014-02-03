<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PedidoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaRegistro','datetime',array('label'=>'Fecha de registro','attr'=>array('style'=>'display:none;')))
            ->add('fechaActualizacion','datetime',array('label'=>'Fecha de última actualización','attr'=>array('style'=>'display:none;')))
            ->add('ultimaActualizacionUsuarioPk','entity',array('class'=>'FrontendBundle:Usuario','label'=>'Usuario última actualización','attr'=>array('style'=>'display:none;')))
            ->add('contactoPk','entity',array('class'=>'FrontendBundle:Contacto','property'=>'areaContacto','label'=>'Área'))
            ->add('pedidoProducto','collection', array('type' => new PedidoProductoType(),'allow_add'=> true,'allow_delete'=>true,'by_reference' => false))
                
            ->add('conceptoFactura','textarea',array('label'=>'Concepto para factura','required'=>true,'attr'=>array('rows'=>"6",'cols'=>"50")))
            ->add('aplicaConcepto1','checkbox', array('label'=> 'Aplica concepto 1','required'  => false,))
            ->add('aplicaConcepto2','checkbox', array('label'=> 'Aplica concepto 2','required'  => false,))
                
            ->add('descuento','number',array('label'=>'Descuento %','required'=>false))
            ->add('fechaAprobacion','date',array('label'=>"Fecha de aprobación",'required'=>true))
            ->add('fechaMaximaEntrega','date',array('label'=>"Fecha máxima de entrega",'required'=>true))
            ->add('financiamiento','number',array('label'=>"Financiamiento (meses)",'required'=>false))
            ->add('facturaNum','textarea',array('label'=>"Facturas registradas",'required'=>false,'attr'=>array('rows'=>"6",'cols'=>"50")))
            ->add('retencionRenta','text',array('label'=>"Retención renta (%)",'required'=>false))
            ->add('retencionIva','text',array('label'=>"Retención IVA (%)",'required'=>false))
            ->add('etapa','text',array('label'=>"Etapa",'required'=>true,'attr'=>array("readonly"=>"readonly","style"=>"width: 50px")))
            ->add('banco')
            ->add('notas','textarea',array('label'=>'Notas','required'=>false,'attr'=>array('rows'=>"6",'cols'=>"50")))
            /*->add('paso1')
            ->add('paso2')
            ->add('paso3')
            ->add('paso4')
            ->add('paso5')
            ->add('paso6')
            ->add('paso7')
            ->add('paso8')
            ->add('paso9')
            ->add('paso10')
            ->add('paso11')
            ->add('paso12')
            ->add('paso13')
            ->add('paso14')
            ->add('paso15')
            ->add('paso16')*/
            
            ->add('coordinadorUsuarioPk')
            ->add('delegado1UsuarioPk')
            ->add('delegado2UsuarioPk')
            ->add('delegado3UsuarioPk')
            /*->add('pasoPedidosPk')*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\Pedido'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_pedido';
    }
}
