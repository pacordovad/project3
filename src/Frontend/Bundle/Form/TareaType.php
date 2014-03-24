<?php

namespace Frontend\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class TareaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $usuario = $options["usuario"];
        $roles = $usuario->getRoles();
        
        if($roles[0] == "ROLE_ADMINISTRADOR" && $usuario->getRoles()["0"] != "ROLE_COORDINADOR"){
            $builder
                ->add('usuarioPk',"entity",array("class"=>"FrontendBundle:Usuario",'empty_value' => false, "required"=>true))
            ;
        }
        
        $builder
            ->add('areaPk',"entity",array("class"=>"FrontendBundle:Area","label"=>"Area Empresa","property"=>"empresaArea",'empty_value' => false, "required"=>true
                ,'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.posicion', 'ASC');
                }))
            ->add('tema',"textarea",array("required"=>false))
            ->add('valorAproximado',"number",array("required"=>false))
            ->add('resolucion1',"textarea",array("required"=>false))
            ->add('resolucion2',"textarea",array("required"=>false))
            ->add('seleccion',"textarea",array("required"=>false))
            ->add('cumplido',"textarea",array("required"=>false))
            ->add('resultado',"textarea",array("required"=>false))
            ->add('notas',"textarea",array("required"=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\Bundle\Entity\Tarea',
            'usuario' => 'Frontend\Bundle\Entity\Usuario',
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_bundle_tarea';
    }
}
