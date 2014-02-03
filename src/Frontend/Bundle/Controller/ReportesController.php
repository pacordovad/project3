<?php

namespace Frontend\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReportesController extends Controller
{
    public function menuReportesPedidosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FrontendBundle:Pedido')->findAll();
        $pasos = $em->getRepository('FrontendBundle:PasoPedido')->findAll();
        $empresas = array();
        $areas = array();
        
        foreach ($entities as $pedido) {
            $area = $pedido->getContactoPk()->getAreaPk();
            $empresa = $area->getEmpresaPk();
            
            $empresas[$empresa->getId()] = $empresa;
            $areas[$area->getId()] = $area;
        }
        
        return $this->render('FrontendBundle:Reportes:menuReportePedidos.html.twig', array(
            'pedidos' => $entities,
            'pasos' => $pasos,
            'empresas' => $empresas,
            'areas' => $areas,
        ));
    }
    
    public function menuReportesPedidosFiltrarAction()
    {
        $request = $this->getRequest();
        $empresaid = $request->request->get('empresa-reporte');
        $areaid = $request->request->get('area-reporte');
        $pasoid = $request->request->get('paso-reporte');
        $fechadesde = $request->request->get('fechadesde-reporte');
        $fechahasta = $request->request->get('fechahasta-reporte');
        
        $em = $this->getDoctrine()->getManager();
        $pedidos = $em->getRepository('FrontendBundle:Pedido')->findAll();
        $areas = null;
        $empresa = null;
        
        $query = "SELECT p FROM FrontendBundle:Pedido p LEFT JOIN p.contactoPk c LEFT JOIN c.areaPk a LEFT JOIN a.empresaPk e LEFT JOIN p.pasoPedidosPk pp WHERE ";
        
        if(!empty($empresaid)){
            $query.=" e.id = :e AND ";
            $areas = $em->getRepository('FrontendBundle:Area')->findByEmpresaPk($empresa);
        }else{
            foreach ($pedidos as $pedido) {
                $area = $pedido->getContactoPk()->getAreaPk();
                $areas[$area->getId()] = $area;
            }
        }
        
        $query.=(!empty($areaid))? " a.id = :a AND " : "";
        $query.=(!empty($pasoid))? " pp.id = :p AND " : "";
        $query.=(!empty($fechadesde))? " p.fechaRegistro >= :fd AND " : "";
        $query.=(!empty($fechahasta))? " p.fechaRegistro <= :fh AND " : "";
        $query.= " 1 = 1";
        
        $query = $em->createQuery($query);
        if(!empty($empresaid)){ $query->setParameter("e",$empresaid); }
        if(!empty($areaid)){ $query->setParameter("a",$areaid); }
        if(!empty($pasoid)){ $query->setParameter("p",$pasoid); }
        if(!empty($fechadesde)){ $query->setParameter("fd",\DateTime::createFromFormat('Y-m-d H:i:s', $fechadesde), \Doctrine\DBAL\Types\Type::DATETIME); }
        if(!empty($fechahasta)){ $query->setParameter("fh",\DateTime::createFromFormat('Y-m-d H:i:s', $fechahasta), \Doctrine\DBAL\Types\Type::DATETIME); }
        
        $pedidos = $query->getResult();
        $idPedidos = array();
        foreach ($pedidos as $pedido) {
            $idPedidos[] = $pedido->getId();
        }
        
        $response = new JsonResponse();
        $response->setData(array('pedidos' => $idPedidos));
        return $response;
    }
    
    public function generaReportePedidoAction()
    {
        $request = $this->getRequest();
        $tipoReporte = $request->request->get('tipo-reporte');
        $pedidoid = $request->request->get('codigo-reporte');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FrontendBundle:Pedido')->find($pedidoid);
        
        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                'warning',
                'No se encontró el pedido.'
            );
            return $this->redirect($this->getRequest()->headers->get('referer'));
        }
        
        $nombre = "pedido_genera_certificacion_entrega";
        if($tipoReporte == 2){
            $nombre = "pedido_genera_control_instalacion";
        }
        
        return $this->redirect($this->generateUrl($nombre,array("id"=>$pedidoid)));
    }
    
    public function menuReportesGeneralesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FrontendBundle:Pedido')->findAll();
        $empresas = array();
        $areas = array();
        
        foreach ($entities as $pedido) {
            $area = $pedido->getContactoPk()->getAreaPk();
            $empresa = $area->getEmpresaPk();
            
            $empresas[$empresa->getId()] = $empresa;
            $areas[$area->getId()] = $area;
        }
        
        return $this->render('FrontendBundle:Reportes:menuReporteGenerales.html.twig', array(
            'empresas' => $empresas,
            'areas' => $areas,
        ));
    }
    
    public function generaReporteGeneralAction()
    {
        $request = $this->getRequest();
        $tipoReporte = $request->request->get('tipo-reporte');
        $empresaid = $request->request->get('empresa-reporte');
        $areaid = $request->request->get('area-reporte');
        
        if($tipoReporte == 1){
            $nombre = "pedido_genera_reporte_general";
            return $this->redirect($this->generateUrl($nombre,array("idempresa"=>$empresaid,"idarea"=>$areaid)));
        }else{
            $nombre = "pedido_genera_reporte_general_puntos";
            return $this->redirect($this->generateUrl($nombre,array()));
        }
    }
}