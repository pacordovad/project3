<?php

namespace Frontend\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\Bundle\Entity\PedidoProducto;
use Frontend\Bundle\Form\PedidoProductoType;

/**
 * PedidoProducto controller.
 *
 */
class PedidoProductoController extends Controller
{

    /**
     * Lists all PedidoProducto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontendBundle:PedidoProducto')->findAll();

        return $this->render('FrontendBundle:PedidoProducto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PedidoProducto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PedidoProducto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'PedidoProducto creada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('pedidoproducto'));
        }

        return $this->render('FrontendBundle:PedidoProducto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a PedidoProducto entity.
    *
    * @param PedidoProducto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PedidoProducto $entity)
    {
        $form = $this->createForm(new PedidoProductoType(), $entity, array(
            'action' => $this->generateUrl('pedidoproducto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new PedidoProducto entity.
     *
     */
    public function newAction()
    {
        $entity = new PedidoProducto();
        $form   = $this->createCreateForm($entity);
        
        return $this->render('FrontendBundle:PedidoProducto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PedidoProducto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:PedidoProducto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PedidoProducto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:PedidoProducto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing PedidoProducto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:PedidoProducto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PedidoProducto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:PedidoProducto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PedidoProducto entity.
    *
    * @param PedidoProducto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PedidoProducto $entity)
    {
        $form = $this->createForm(new PedidoProductoType(), $entity, array(
            'action' => $this->generateUrl('pedidoproducto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing PedidoProducto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:PedidoProducto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PedidoProducto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'PedidoProducto actualizada exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('pedidoproducto'));
        }

        return $this->render('FrontendBundle:PedidoProducto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PedidoProducto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:PedidoProducto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PedidoProducto entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
            'success',
            'PedidoProducto eliminada exitosamente.'
        );
        

        return $this->redirect($this->generateUrl('pedidoproducto'));
    }

    /**
     * Creates a form to delete a PedidoProducto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pedidoproducto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
    
    
/**
    * Creates a form to create a PedidoProducto entity.
    *
    * @param PedidoProducto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function crearFormaPersonalizada(PedidoProducto $entity)
    {
        $form = $this->createForm(new PedidoProductoType(), $entity, array(
            'method' => 'POST',
        ));
        return $form;
    }

    private function sanitizaVariable($var){
        if($var == '-'){
            return null;
        }else{
            return $var;
        }
    }
    
    /**
     * Displays a form to create a new PedidoProducto entity.
     *
     */
    public function pedidoProductoAction($productoSeleccionadoId,$nombreProducto,$cantidad,$dimensionId,$dimensionX,$dimensionY,$cortesia,$tipoCalidadId,$pedidoPk)
    {
        $productoSeleccionadoId = $this->sanitizaVariable($productoSeleccionadoId);
        $nombreProducto = $this->sanitizaVariable($nombreProducto);
        $cantidad = $this->sanitizaVariable($cantidad);
        $dimensionId = $this->sanitizaVariable($dimensionId);
        $dimensionX = $this->sanitizaVariable($dimensionX);
        $dimensionY = $this->sanitizaVariable($dimensionY);
        $tipoCalidadId = $this->sanitizaVariable($tipoCalidadId);
        $cortesia = $this->sanitizaVariable($cortesia);
        $pedidoPk = $this->sanitizaVariable($pedidoPk);
        
        $em = $this->getDoctrine()->getManager();
        $entity = new PedidoProducto();
        $form   = $this->crearFormaPersonalizada($entity);
        $productos = $em->getRepository('FrontendBundle:Producto')->findAll();
        $categorias = $em->getRepository('FrontendBundle:Categoria')->findAll();
        $tiposCalidad = $em->getRepository('FrontendBundle:TipoCalidad')->findBy(array(),array('posicion' => 'ASC')); 
        $medidas = $em->getRepository('FrontendBundle:Medida')->findBy(array(),array('posicion' => 'ASC'));
        
        /*
        $productoSeleccionadoId = 18;
        $nombreProducto = "nombre";
        $cantidad = "10";
        $dimensionId = 'all';
        $dimensionX = 2.0;
        $dimensionY = 8.1;
        $tipoCalidadId = "2";
        */
        /*
        $productoSeleccionadoId = null;
        $nombreProducto = null;
        $cantidad = null;
        $dimensionId = null;
        $dimensionX = null;
        $dimensionY = null;
        $tipoCalidadId = null;
        */
        return $this->render('FrontendBundle:PedidoProducto:pedidoProducto.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'productos' => $productos,
            'dimensiones' => $medidas,
            'categorias' => $categorias,
            'tiposCalidad' => $tiposCalidad,
            
            'productoSeleccionadoId' => $productoSeleccionadoId,
            'nombreProducto'=>$nombreProducto,
            'cantidad' => $cantidad,
            'dimensionId' => $dimensionId,
            'dimensionX' => $dimensionX,
            'dimensionY' => $dimensionY,
            'tipoCalidadId' => $tipoCalidadId,
            'cortesia'=>$cortesia,
            'pedidoPk'=>$pedidoPk
        ));
    }
    
    public function getEditLinkAction($productoSeleccionadoId,$nombreProducto,$cantidad,$dimensionId,$dimensionX,$dimensionY,$cortesia,$tipoCalidadId,$pedidoPk){
        $uri = $this->get('router')->generate('pedidoproductoxml',
                array(
                    'productoSeleccionadoId' => $productoSeleccionadoId,
                    'nombreProducto' => $nombreProducto,
                    'cantidad' => $cantidad,
                    'dimensionId' =>$dimensionId,
                    'dimensionX' => $dimensionX,
                    'dimensionY' => $dimensionY,
                    'cortesia' => $cortesia,
                    'tipoCalidadId' => $tipoCalidadId,
                    'pedidoPk' => $pedidoPk,
                    )
                );
        $response = new JsonResponse();
        $response->setData(array('url' => $uri));
        return $response;
    }
}
