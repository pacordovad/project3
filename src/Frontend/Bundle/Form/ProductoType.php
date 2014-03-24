<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ProductoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $verifica = $options["verifica"];
        
        $builder
            ->add('nombreImagen')
            ->add('imagen','file',array('label'=>'Imagen','required'=>$verifica))
            ->add('categoriaPk','entity',array('class'=>'FrontendBundle:Categoria','label'=>"Categoría"))
            ->add('figuraPk','entity',array('class'=>'FrontendBundle:Figura','label'=>"Figura",
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.posicionFigura', 'ASC');
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
            'data_class' => 'Frontend\Bundle\Entity\Producto',
            'verifica' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_producto';
    }
}
