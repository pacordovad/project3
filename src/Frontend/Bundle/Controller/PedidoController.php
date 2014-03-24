<?php

namespace Frontend\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\JsonResponse;

use Frontend\Bundle\Entity\Pedido;
use Frontend\Bundle\Form\PedidoType;

/**
 * Pedido controller.
 *
 */
class PedidoController extends Controller
{

    /**
     * Lists all Pedido entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontendBundle:Pedido')->findAll();

        return $this->render('FrontendBundle:Pedido:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    /**
     * Genera el tablero de cobros
     */
    public function cobrosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FrontendBundle:Pedido')->findAll();
        $usuarios = $em->getRepository('FrontendBundle:Usuario')->findAll();
        $pasos = $em->getRepository('FrontendBundle:PasoPedido')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = array();
        $areas = array();
        $coordinadores = array();
        
        foreach ($entities as $pedido) {
            $area = $pedido->getContactoPk()->getAreaPk();
            $empresa = $area->getEmpresaPk();
            $coordinador = $pedido->getCoordinadorUsuarioPk();
            
            $empresas[$empresa->getId()] = $empresa;
            $areas[$area->getId()] = $area;
            $coordinadores[$coordinador->getId()] = $coordinador;
        }
        
        return $this->render('FrontendBundle:Pedido:cobros.html.twig', array(
            'entities' => $entities,
            'usuarios' => $usuarios,
            'pasos' => $pasos,
            'empresas' => $empresas,
            'areas' => $areas,
            'coordinadores' => $coordinadores
        ));
    }
    
    /**
     * Genera el tablero de control
     */
    public function controlAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FrontendBundle:Pedido')->findBy(array(), array('fechaRegistro' => 'DESC'));
        $usuarios = $em->getRepository('FrontendBundle:Usuario')->findAll();
        $pasos = $em->getRepository('FrontendBundle:PasoPedido')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = array();
        $areas = array();
        $coordinadores = array();
        
        foreach ($entities as $pedido) {
            $area = $pedido->getContactoPk()->getAreaPk();
            $empresa = $area->getEmpresaPk();
            $coordinador = $pedido->getCoordinadorUsuarioPk();
            
            $empresas[$empresa->getId()] = $empresa;
            $areas[$area->getId()] = $area;
            $coordinadores[$coordinador->getId()] = $coordinador;
        }
        
        return $this->render('FrontendBundle:Pedido:control.html.twig', array(
            'entities' => $entities,
            'usuarios' => $usuarios,
            'pasos' => $pasos,
            'empresas' => $empresas,
            'areas' => $areas,
            'coordinadores' => $coordinadores
        ));
    }
    
    /**
     * Genera la vista de esquema
     *
     */
    public function esquemaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $pedido = $em->getRepository('FrontendBundle:Pedido')->find($id);
        $productos = $pedido->getPedidoProducto();
        $productosSeleccionados = array();
        
        foreach ($productos as $producto) {
            $seEncontro = false;
            foreach ($productosSeleccionados as $seleccionado){
                if($producto->getProductoPk()->getId() == $seleccionado->getProductoPk()->getId() && $producto->getTipoCalidadPk()->getId() == $seleccionado->getTipoCalidadPk()->getId() && $producto->getMedidaPk()->getId() == $seleccionado->getMedidaPk()->getId()){
                    $seEncontro = true;
                    $seleccionado->setCantidad($seleccionado->getCantidad() + $producto->getCantidad());
                    break;
                }                
            }
            if(!$seEncontro){
                $productosSeleccionados[] = $producto;
            }
        }
        
        /*
        foreach ($productos as $producto) {
            $seEncontro = false;
            foreach ($productosSeleccionados as $seleccionado){
                if($seleccionado->getProductoPk()->getId() == $producto->getProductoPk()->getId()){
                    $seEncontro = true;
                    if(!$producto->getCortesia()){
                        $seleccionado->setNumFacturados($seleccionado->getNumFacturados() + $producto->getCantidad());
                    }else{
                        $seleccionado->setNumCortesias($seleccionado->getNumCortesias() + $producto->getCantidad());
                    }
                    break;
                }                
            }
            if(!$seEncontro){
                $productosSeleccionados[] = $producto;
                if(!$producto->getCortesia()){
                    $producto->setNumFacturados($producto->getCantidad());
                    $producto->setNumCortesias(0);
                }else{
                    $producto->setNumCortesias($producto->getCantidad());
                    $producto->setNumFacturados(0);
                }
            }
        }
         *
         */
        
        return $this->render('FrontendBundle:Pedido:esquema.html.twig', array(
            'entity'=>$pedido,
            'productos'=>$productosSeleccionados
        ));
    }
    
    /**
     * Genera el tablero de control
     *
     */
    public function productosAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $pedido = $em->getRepository('FrontendBundle:Pedido')->find($id);
        $productos = $pedido->getPedidoProducto();
        
        $categorias = $em->getRepository('FrontendBundle:Categoria')->findAll();
        $pasos = $em->getRepository('FrontendBundle:PasoPedido')->findBy(array(),array('posicion' => 'ASC'));
        $calidades =  $em->getRepository('FrontendBundle:TipoCalidad')->findBy(array(),array('posicion' => 'ASC')); 
        $medidas =  $em->getRepository('FrontendBundle:Medida')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = array();
        $areas = array();
        $coordinadores = array();
        
        $area = $pedido->getContactoPk()->getAreaPk();
        $empresa = $area->getEmpresaPk();
        $coordinador = $pedido->getCoordinadorUsuarioPk();

        $empresas[$empresa->getId()] = $empresa;
        $areas[$area->getId()] = $area;
        $coordinadores[$coordinador->getId()] = $coordinador;
        
        return $this->render('FrontendBundle:Pedido:productos.html.twig', array(
            'pedido' => $pedido,
            'entities' => $productos,
            'productos' => $productos,
            'pasos' => $pasos,
            'empresas' => $empresas,
            'areas' => $areas,
            'coordinadores' => $coordinadores,
            'categorias' => $categorias,
            'calidades' => $calidades,
            'medidas' => $medidas
        ));
    }
    
    public function produccionAction()
    {
        $usuario= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        
        
        if($usuario->getRoles()["0"] != "ROLE_ADMINISTRADOR"){
            $queryPedidosProductos = $em->createQuery("SELECT p 
            FROM FrontendBundle:PedidoProducto p LEFT JOIN p.pedidoPk pe WHERE pe.coordinadorUsuarioPk = :usuario OR pe.delegado1UsuarioPk = :usuario OR pe.delegado2UsuarioPk = :usuario OR pe.delegado3UsuarioPk = :usuario
            ORDER BY pe.fechaRegistro DESC");
            $queryPedidosProductos->setParameter("usuario",$usuario);
            $queryPedidos = $em->createQuery("SELECT pe 
            FROM FrontendBundle:Pedido pe WHERE pe.coordinadorUsuarioPk = :usuario OR pe.delegado1UsuarioPk = :usuario OR pe.delegado2UsuarioPk = :usuario OR pe.delegado3UsuarioPk = :usuario");
            $queryPedidos->setParameter("usuario",$usuario);
            $queryProductos = $em->createQuery("SELECT DISTINCT p.nombreProducto
            FROM FrontendBundle:PedidoProducto p LEFT JOIN p.pedidoPk pe WHERE pe.coordinadorUsuarioPk = :usuario OR pe.delegado1UsuarioPk = :usuario OR pe.delegado2UsuarioPk = :usuario OR pe.delegado3UsuarioPk = :usuario
            ORDER BY pe.fechaRegistro DESC");
            $queryProductos->setParameter("usuario",$usuario);
        }else{
            $queryPedidosProductos = $em->createQuery("SELECT p 
            FROM FrontendBundle:PedidoProducto p LEFT JOIN p.pedidoPk pe 
            ORDER BY pe.fechaRegistro DESC");
            $queryPedidos = $em->createQuery("SELECT pe 
            FROM FrontendBundle:Pedido pe");
            $queryProductos = $em->createQuery("SELECT DISTINCT p.nombreProducto
            FROM FrontendBundle:PedidoProducto p LEFT JOIN p.pedidoPk pe LEFT JOIN p.productoPk prod 
            ORDER BY pe.fechaRegistro DESC");
        }
        
        $pedidosProductos = $queryPedidosProductos->getResult();
        $pedidos = $queryPedidos->getResult();
        $productos = $queryProductos->getResult();
        
        $categorias = $em->getRepository('FrontendBundle:Categoria')->findAll();
        $pasos = $em->getRepository('FrontendBundle:PasoPedido')->findBy(array(),array('posicion' => 'ASC'));
        $calidades =  $em->getRepository('FrontendBundle:TipoCalidad')->findBy(array(),array('posicion' => 'ASC')); 
        $medidas =  $em->getRepository('FrontendBundle:Medida')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = array();
        $areas = array();
        $coordinadores = array();
        
        foreach ($pedidos as $pedido) {
            $area = $pedido->getContactoPk()->getAreaPk();
            $empresa = $area->getEmpresaPk();
            $coordinador = $pedido->getCoordinadorUsuarioPk();
            
            $empresas[$empresa->getId()] = $empresa;
            $areas[$area->getId()] = $area;
            $coordinadores[$coordinador->getId()] = $coordinador;
        }
        
        return $this->render('FrontendBundle:Pedido:produccion.html.twig', array(
            'entities' => $pedidosProductos,
            'productos' => $productos,
            'pasos' => $pasos,
            'empresas' => $empresas,
            'areas' => $areas,
            'coordinadores' => $coordinadores,
            'categorias' => $categorias,
            'calidades' => $calidades,
            'medidas' => $medidas
        ));
    }
    
    /**
     * Creates a new Pedido entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pedido();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $contactos = $em->getRepository('FrontendBundle:Contacto')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = $this->getEmpresasContactos($em);
        
        if ($form->isValid()) {
            foreach ($entity->getPedidoProducto() as $pedidoProducto){
                $pedidoProducto->setPedidoPk($entity);
                if($pedidoProducto->getCortesia() && !$entity->getAplicaConcepto2()){
                    $entity->removePedidoProducto($pedidoProducto);
                }
            }
            
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Pedido creado exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('pedido_edit',array('id' => $entity->getId())));
            //return $this->redirect($this->generateUrl('pedido'));
        }

        return $this->render('FrontendBundle:Pedido:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'empresas' => $empresas,
            'contactos' => $contactos
        ));
    }

    /**
    * Creates a form to create a Pedido entity.
    *
    * @param Pedido $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Pedido $entity)
    {
        $form = $this->createForm(new PedidoType(), $entity, array(
            'action' => $this->generateUrl('pedido_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    
    
    /**
     * Displays a form to create a new Pedido entity.
     *
     */
    public function newAction()
    {
        $entity = new Pedido();
        
        $ahora = new \DateTime();
        $entity->setFechaRegistro($ahora);
        $entity->setFechaActualizacion($ahora);
        $entity->setFechaAprobacion($ahora);
        $ahora2 = new \DateTime();
        $entity->setFechaMaximaEntrega($ahora2->add(new \DateInterval('P1M')));
        $entity->setUltimaActualizacionUsuarioPk($this->get('security.context')->getToken()->getUser());
        $entity->setCoordinadorUsuarioPk($this->get('security.context')->getToken()->getUser());
        $entity->setDelegado1UsuarioPk($this->get('security.context')->getToken()->getUser());
        $entity->setDelegado2UsuarioPk($this->get('security.context')->getToken()->getUser());
        $entity->setDelegado3UsuarioPk($this->get('security.context')->getToken()->getUser());
        $entity->setNotas("Responsabilidad: Las firmas certifican la aceptación y compromiso en representación de cada entidad comercial. Luego de la entrega del producto, RECUR no se responsabiliza del uso indebido, daño o pérdida. \n\nGarantía y duración: La garantía del producto es de 3 años, su durabilidad aprox.: exterior 10 años, interior 30 años.\n\nTiempo de entrega:  El tiempo de entrega es de 30 días laborables, a partir de su aprobación.\n\nValor agregado:   RECUR brinda como valor agregado, los servicios de análisis, transporte, instalación, mantenimiento, respaldos fotográficos... y es aplicable dependiendo el desarrollo específico de cada caso.");
        $form   = $this->createCreateForm($entity);
        
        $em = $this->getDoctrine()->getManager();
        $contactos = $em->getRepository('FrontendBundle:Contacto')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = $this->getEmpresasContactos($em);
        
        return $this->render('FrontendBundle:Pedido:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'empresas' => $empresas,
            'contactos' => $contactos
        ));
    }

    /**
     * Finds and displays a Pedido entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontendBundle:Pedido:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Pedido entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        $contactos = $em->getRepository('FrontendBundle:Contacto')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = $this->getEmpresasContactos($em);
        
        return $this->render('FrontendBundle:Pedido:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'empresas' => $empresas,
            'contactos' => $contactos
        ));
    }

    /**
    * Creates a form to edit a Pedido entity.
    *
    * @param Pedido $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pedido $entity)
    {
        $form = $this->createForm(new PedidoType(), $entity, array(
            'action' => $this->generateUrl('pedido_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Pedido entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontendBundle:Pedido')->find($id);
        
        $originalProductos = new ArrayCollection();
        foreach ($entity->getPedidoProducto() as $pedidoProducto) {
            $originalProductos->add($pedidoProducto);
        }
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $contactos = $em->getRepository('FrontendBundle:Contacto')->findBy(array(),array('posicion' => 'ASC'));
        $empresas = $this->getEmpresasContactos($em);
        
        if ($editForm->isValid()) { 
            foreach ($entity->getPedidoProducto() as $pedidoProducto){
                $pedidoProducto->setPedidoPk($entity);
                if($pedidoProducto->getCortesia() && !$entity->getAplicaConcepto2()){
                    $entity->removePedidoProducto($pedidoProducto);
                    $em->remove($pedidoProducto);
                }
            }
            
            // remove the relationship between the tag and the Task
            foreach ($originalProductos as $pedidoProducto) {
                if (false === $entity->getPedidoProducto()->contains($pedidoProducto)) {
                    // if you wanted to delete the producto entirely, you can also do that
                    $em->remove($pedidoProducto);
                }
            }
            
            $ahora = new \DateTime();
            $entity->setFechaActualizacion($ahora);
            $entity->setUltimaActualizacionUsuarioPk($this->get('security.context')->getToken()->getUser());
            
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Pedido actualizado exitosamente.'
            );
            
            return $this->redirect($this->generateUrl('pedido_edit',array('id' => $entity->getId())));
        }

        return $this->render('FrontendBundle:Pedido:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'empresas' => $empresas,
            'contactos' => $contactos
        ));
    }
    /**
     * Deletes a Pedido entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FrontendBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
            'success',
            'Pedido eliminado exitosamente.'
        );
        

        return $this->redirect($this->generateUrl('pedido'));
    }

    /**
     * Creates a form to delete a Pedido entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pedido_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
    
    private function getEmpresasContactos($em){
        $query = $em->createQuery("SELECT DISTINCT e FROM FrontendBundle:Contacto c, FrontendBundle:Area a, FrontendBundle:Empresa e WHERE c.areaPk = a.id AND a.empresaPk = e.id");
        $empresas = $query->getResult();
        return $empresas;
    }
    
    public function cambiaDelegado1Action(){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $idPedido = $this->getRequest()->request->get('idPedido');
            $idDelegado1 = $this->getRequest()->request->get('idDelegado1');
            $entity = $em->getRepository('FrontendBundle:Pedido')->find($idPedido);
            $delegado = $em->getRepository('FrontendBundle:Usuario')->find($idDelegado1);
            $entity->setDelegado1UsuarioPk($delegado);
            $em->flush();
            $response->setData(array('ok' => true));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    public function cambiaDelegado2Action(){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $idPedido = $this->getRequest()->request->get('idPedido');
            $idDelegado2 = $this->getRequest()->request->get('idDelegado2');
            $entity = $em->getRepository('FrontendBundle:Pedido')->find($idPedido);
            $delegado = $em->getRepository('FrontendBundle:Usuario')->find($idDelegado2);
            $entity->setDelegado2UsuarioPk($delegado);
            $em->flush();
            $response->setData(array('ok' => true));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    public function cambiaDelegado3Action(){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $idPedido = $this->getRequest()->request->get('idPedido');
            $idDelegado3 = $this->getRequest()->request->get('idDelegado3');
            $entity = $em->getRepository('FrontendBundle:Pedido')->find($idPedido);
            $delegado = $em->getRepository('FrontendBundle:Usuario')->find($idDelegado3);
            $entity->setDelegado3UsuarioPk($delegado);
            $em->flush();
            $response->setData(array('ok' => true));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    public function cambiaPasoAction(){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $idPedido = $this->getRequest()->request->get('idPedido');
            $idPaso = $this->getRequest()->request->get('idPaso');
            $entity = $em->getRepository('FrontendBundle:Pedido')->find($idPedido);
            $paso = ($idPaso != "-1")?$em->getRepository('FrontendBundle:PasoPedido')->find($idPaso):null;
            $entity->setPasoPedidosPk($paso);
            $em->flush();
            $response->setData(array('ok' => true));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    public function certificacionEntregaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $pedido = $em->getRepository('FrontendBundle:Pedido')->find($id);
        
        return $this->render('FrontendBundle:Pedido:certificacionEntrega.html.twig', array(
            'entity'=>$pedido,
        ));
    }
    
    public function generaCertificacionEntregaAction($id)
    {
        $opts = array( 'http'=>array( 'method'=>"GET",
              'header'=>"Accept-language: en\r\n" .
               "Cookie: ".session_name()."=".session_id()."\r\n" ) );

        $context = stream_context_create($opts);
        session_write_close();
        
        include(dirname(__FILE__)."/mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
        $url = $this->get('router')->generate('pedido_certificacion_entrega', array('id' => $id), true);
        $host = $this->get('router')->getContext()->getHost();
        $mpdf->setBasePath($host);
        $mpdf->WriteHTML(file_get_contents($url, false, $context));
        $mpdf->Output();
        die();
    }
    
    public function controlInstalacionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $pedido = $em->getRepository('FrontendBundle:Pedido')->find($id);
        
        return $this->render('FrontendBundle:Pedido:controlInstalacion.html.twig', array(
            'entity'=>$pedido,
        ));
    }
    
    public function generaControlInstalacionAction($id)
    {
        $opts = array( 'http'=>array( 'method'=>"GET",
              'header'=>"Accept-language: en\r\n" .
               "Cookie: ".session_name()."=".session_id()."\r\n" ) );

        $context = stream_context_create($opts);
        session_write_close();
        
        include(dirname(__FILE__)."/mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
        $url = $this->get('router')->generate('pedido_control_instalacion', array('id' => $id), true);
        $host = $this->get('router')->getContext()->getHost();
        $mpdf->setBasePath($host);
        $mpdf->WriteHTML(file_get_contents($url, false, $context));
        $mpdf->Output();
        die();
    }
    
    public function getEtapaArea($areaId){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT p 
            FROM FrontendBundle:Pedido p, FrontendBundle:Contacto c, FrontendBundle:Area a 
            WHERE p.contactoPk = c.id AND c.areaPk = a.id AND a.id = ?1");
        $query->setParameter(1, $areaId);
        $pedidos = $query->getResult();
        $contador = 0;
        foreach($pedidos as $pedido){
            if($pedido->getFinalizado()){
                $contador++;                
            }
        }
        return $contador;
    }
    
    public function reporteGeneralAction($idempresa,$idarea)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FrontendBundle:Pedido')->findAll();
        $empresa = $em->getRepository('FrontendBundle:Empresa')->find($idempresa);
        $areas = array();
        
        if($idarea == -1){
            foreach ($entities as $pedido) {
                $area = $pedido->getContactoPk()->getAreaPk();
                if($area->getEmpresaPk()->getId() == $idempresa){
                    if(!array_key_exists($area->getId(), $areas)){
                        $areas[$area->getId()] = $area;
                    }else{
                        $area = $areas[$area->getId()];
                    }
                    $area->setEtapa($this->getEtapaArea($idarea));
                    $area->addPedido($pedido);
                }
            }
        }else{
            $area = $em->getRepository('FrontendBundle:Area')->find($idarea);
            if($area->getEmpresaPk()->getId() == $idempresa){
                $area->setEtapa($this->getEtapaArea($idarea));
                foreach ($entities as $pedido) {
                    $areaPedido = $pedido->getContactoPk()->getAreaPk();
                    if($areaPedido->getId() == $idarea){
                        $area->addPedido($pedido);
                    }
                }
                $areas[] = $area;
            }
        }
        
        $etapas = 0;
        $total = 0;
        foreach ($areas as $area){
            $etapas += $area->getEtapa();
            $total += $area->getTotal();
        }
        
        return $this->render('FrontendBundle:Pedido:reporteGeneral.html.twig', array(
            'empresa' => $empresa,
            'areas' => $areas,
            'etapas' => $etapas,
            'total' => $total,
        ));
    }
    
    public function generaReporteGeneralAction($idempresa,$idarea)
    {
        $opts = array( 'http'=>array( 'method'=>"GET",
              'header'=>"Accept-language: en\r\n" .
               "Cookie: ".session_name()."=".session_id()."\r\n" ) );

        $context = stream_context_create($opts);
        session_write_close();
        
        include(dirname(__FILE__)."/mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
        $url = $this->get('router')->generate('pedido_reporte_general', array('idempresa' => $idempresa, 'idarea'=>$idarea), true);
        $host = $this->get('router')->getContext()->getHost();
        $mpdf->setBasePath($host);
        $mpdf->WriteHTML(file_get_contents($url, false, $context));
        $mpdf->Output();
        die();
    }
    
    public function reporteGeneralPuntosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $queryPedidos = $em->createQuery("SELECT p as pedido, SUBSTRING(p.fechaRegistro, 6, 2) month, SUBSTRING(p.fechaRegistro, 1, 4) year
            FROM FrontendBundle:Pedido p ORDER BY p.fechaRegistro");
        $pedidos = $queryPedidos->getResult();
        
        $resultados = array();
        $totalPuntos = 0;
        foreach ($pedidos as $pedido){
            $indice = $pedido["month"].$pedido["year"];
            if(!array_key_exists($indice,$resultados)){
                $resultados[$indice] = array("puntos"=>0,"mes"=>$this->transformaMes($pedido["month"]),"anio"=>$pedido["year"]);
            }
            $resultados[$indice]["puntos"] += $pedido["pedido"]->getChecks();
            $totalPuntos += $pedido["pedido"]->getChecks();
        }
        
        return $this->render('FrontendBundle:Pedido:reporteGeneralPuntos.html.twig', array(
            'resultados'=>$resultados,
            'totalpuntos'=>$totalPuntos
        ));
    }
    
    public function generaReporteGeneralPuntosAction()
    {
        $opts = array( 'http'=>array( 'method'=>"GET",
              'header'=>"Accept-language: en\r\n" .
               "Cookie: ".session_name()."=".session_id()."\r\n" ) );

        $context = stream_context_create($opts);
        session_write_close();
        
        include(dirname(__FILE__)."/mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
        $url = $this->get('router')->generate('pedido_reporte_general_puntos', array(), true);
        $host = $this->get('router')->getContext()->getHost();
        $mpdf->setBasePath($host);
        $mpdf->WriteHTML(file_get_contents($url, false, $context));
        $mpdf->Output();
        die();
    }
    
    private function transformaMes($num){
        $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');        
        return $meses[$num - 1];
    }
    
    public function imprimeAction($id)
    {
        $request = $this->getRequest();
        $opcion = $request->request->get('opcionimprimir');
        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FrontendBundle:Pedido')->find($id);
        
        if($opcion == "1"){
            return $this->render('FrontendBundle:Pedido:pedido.html.twig', array(
                'entity'=>$entity,
            ));
        }
        if($opcion == "2"){
            return $this->render('FrontendBundle:Pedido:listado.html.twig', array(
                'entity'=>$entity,
            ));
        }
        if($opcion == "3"){
            $productos = $entity->getPedidoProducto();
            $productosSeleccionados = array();

            foreach ($productos as $producto) {
                $seEncontro = false;
                foreach ($productosSeleccionados as $seleccionado){
                    if($producto->getProductoPk()->getId() == $seleccionado->getProductoPk()->getId() && $producto->getTipoCalidadPk()->getId() == $seleccionado->getTipoCalidadPk()->getId() && $producto->getMedidaPk()->getId() == $seleccionado->getMedidaPk()->getId()){
                        $seEncontro = true;
                        $seleccionado->setCantidad($seleccionado->getCantidad() + $producto->getCantidad());
                        break;
                    }                
                }
                if(!$seEncontro){
                    $productosSeleccionados[] = $producto;
                }
            }
            
            return $this->render('FrontendBundle:Pedido:esquemasimple.html.twig', array(
                'entity'=>$entity,
                'productos'=>$productosSeleccionados
            ));
        }
        if($opcion == "4"){
            return $this->render('FrontendBundle:Pedido:reciboPago.html.twig', array(
                'entity'=>$entity,
            ));
        }
    }
    
    public function actualizaProduccionAction($id,$paso){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $valor = $this->getRequest()->request->get('valor');
            $pedidoProducto = $em->getRepository('FrontendBundle:PedidoProducto')->find($id);
            $pedidoProducto->setPasoPorNum($paso,$valor);
            $em->flush();
            
            $pedido = $pedidoProducto->getPedidoPk();
            $pasoCompleto = true;
            foreach($pedido->getPedidoProducto() as $pedidoProducto){
                if(!$pedidoProducto->getPasoPorNum($paso)){
                    $pasoCompleto = false;
                    break;
                }
            }
            
            if($pasoCompleto){
                $pedido->setPasoPorNum($paso,true);
            }else{
                $pedido->setPasoPorNum($paso,false);
            }
            $em->flush();
            
            $response->setData(array('ok' => true));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    /**
     * Duplica un pedido y lo ubica al final de la tabla.
     *
     */
    public function duplicaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $pedidoOriginal = $em->getRepository('FrontendBundle:Pedido')->find($id);

        $pedido = clone $pedidoOriginal;
        $pedido->setId(null);
        $pedido->removeTodosPedidoProducto();
        
        foreach ($pedidoOriginal->getPedidoProducto() as $pedidoProductoOriginal){
            $pedidoProducto = clone $pedidoProductoOriginal;
            $pedidoProducto->setPedidoPk($pedido);
            $pedido->addPedidoProducto($pedidoProducto);
        }
        
        $pedido->setPaso1(FALSE);
        $pedido->setPaso2(FALSE);
        $pedido->setPaso3(FALSE);
        $pedido->setPaso4(FALSE);
        $pedido->setPaso5(FALSE);
        $pedido->setPaso6(FALSE);
        $pedido->setPaso7(FALSE);
        $pedido->setPaso8(FALSE);
        $pedido->setPaso9(FALSE);
        $pedido->setPaso10(FALSE);
        $pedido->setPaso11(FALSE);
        $pedido->setPaso12(FALSE);
        $pedido->setPaso13(FALSE);
        $pedido->setPaso14(FALSE);
        $pedido->setPaso15(FALSE);
        $pedido->setPaso16(FALSE);
        $pedido->setPasoPedidosPk(null);
        $ahora = new \DateTime();
        $pedido->setFechaRegistro($ahora);
        $pedido->setFechaActualizacion($ahora);
        $pedido->setFechaAprobacion($ahora);
        $ahora2 = new \DateTime();
        $pedido->setFechaMaximaEntrega($ahora2->add(new \DateInterval('P1M')));
        $pedido->setUltimaActualizacionUsuarioPk($this->get('security.context')->getToken()->getUser());
        $pedido->setCoordinadorUsuarioPk($this->get('security.context')->getToken()->getUser());
        $pedido->setDelegado1UsuarioPk($this->get('security.context')->getToken()->getUser());
        $pedido->setDelegado2UsuarioPk($this->get('security.context')->getToken()->getUser());
        $pedido->setDelegado3UsuarioPk($this->get('security.context')->getToken()->getUser());
        
        $em->persist($pedido);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add(
                'success',
                'Pedido duplicado exitosamente.'
        );
        
        return $this->redirect($this->generateUrl('pedido_control'));
    }
    
    public function getPedidoNotasControlAction($id){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $pedido = $em->getRepository('FrontendBundle:Pedido')->find($id);
            
            $response->setData(array('ok' => true, "data" => $pedido->getNotasControl()));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    public function setPedidoNotasControlAction($id){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $notas = $this->getRequest()->request->get('notas');
            $pedido = $em->getRepository('FrontendBundle:Pedido')->find($id);
            $pedido->setNotasControl($notas);
            $em->flush();
            
            $response->setData(array('ok' => true));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    public function getPPNotasControlAction($id){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $pedidoProducto = $em->getRepository('FrontendBundle:PedidoProducto')->find($id);
            
            $response->setData(array('ok' => true, "data" => $pedidoProducto->getNotasControlPp()));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
    
    public function setPPNotasControlAction($id){
        $response = new JsonResponse();
        try {
            $em = $this->getDoctrine()->getManager();
            $notas = $this->getRequest()->request->get('notas');
            $pedidoProducto = $em->getRepository('FrontendBundle:PedidoProducto')->find($id);
            $pedidoProducto->setNotasControlPp($notas);
            $em->flush();
            
            $response->setData(array('ok' => true));
        } catch (Exception $e) {
            $response->setData(array('ok' => false));
        }
        return $response;
    }
}