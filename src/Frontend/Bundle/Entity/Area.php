<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="area")
 * @ORM\Entity
 */
class Area
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AREA_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_AREA", type="string", length=64, nullable=false)
     */
    private $nombreArea;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EMPRESA_PK", referencedColumnName="EMPRESA_PK", nullable=false)
     * })
     */
    private $empresaPk;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO", type="string", length=64, nullable=true)
     */
    private $codigo;

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo() {
        return $this->codigo;
    }
    
    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Area
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
        
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreArea
     *
     * @param string $nombreArea
     * @return Area
     */
    public function setNombreArea($nombreArea)
    {
        $this->nombreArea = $nombreArea;
    
        return $this;
    }

    /**
     * Get nombreArea
     *
     * @return string 
     */
    public function getNombreArea()
    {
        return $this->nombreArea;
    }

    /**
     * Set empresaPk
     *
     * @param \Frontend\Bundle\Entity\Empresa $empresaPk
     * @return Area
     */
    public function setEmpresaPk(\Frontend\Bundle\Entity\Empresa $empresaPk = null)
    {
        $this->empresaPk = $empresaPk;
    
        return $this;
    }

    /**
     * Get empresaPk
     *
     * @return \Frontend\Bundle\Entity\Empresa 
     */
    public function getEmpresaPk()
    {
        return $this->empresaPk;
    }
    
    public function getEmpresaArea(){
        return $this->empresaPk.", ".$this->nombreArea;
    }
    
    public function __toString() {
        return $this->nombreArea;
    }
    
    private $etapa;
    
    public function getEtapa() {
        return $this->etapa;
    }

    public function setEtapa($etapa) {
        $this->etapa = $etapa;
    }
    
    private $pedidos;
    
    public function addPedido(Pedido $pedido){
        if($this->pedidos==null){
            $this->pedidos = array();            
        }
        $this->pedidos[] = $pedido;
    }
    
    public function getPedidos(){
        if($this->pedidos==null){
            $this->pedidos = array();            
        }
        return $this->pedidos;
    }
    
    public function getTotal(){
        if($this->pedidos==null){
            $this->pedidos = array();            
        }
        $total = 0;
        foreach ($this->pedidos as $pedido){
            $total += $pedido->getTotal();
        }
        return $total;
    }
}