<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PedidoProducto
 *
 * @ORM\Table(name="pedido_producto")
 * @ORM\Entity
 */
class PedidoProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PEDIDO_PRODUCTO_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_PRODUCTO", type="string", length=64, nullable=true)
     */
    private $nombreProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="CANTIDAD", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="ALTO", type="decimal", nullable=true)
     */
    private $alto;

    /**
     * @var float
     *
     * @ORM\Column(name="ANCHO", type="decimal", nullable=true)
     */
    private $ancho;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CORTESIA", type="boolean", nullable=true)
     */
    private $cortesia;

    /**
     * @var float
     *
     * @ORM\Column(name="PRECIO_VENTA", type="decimal", nullable=false)
     */
    private $precioVenta;
    
    /**
     * @var string
     *
     * @ORM\Column(name="NOTAS_CONTROL_PP", type="text", nullable=true)
     */
    private $notasControlPp;

    /**
     * @var \TipoCalidad
     *
     * @ORM\ManyToOne(targetEntity="TipoCalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPO_CALIDAD_PK", referencedColumnName="TIPO_CALIDAD_PK")
     * })
     */
    private $tipoCalidadPk;

    /**
     * @var \Pedido
     *
     * @ORM\ManyToOne(targetEntity="Pedido",inversedBy="PedidoProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PEDIDO_PK", referencedColumnName="PEDIDO_PK")
     * })
     */
    private $pedidoPk;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PRODUCTO_PK", referencedColumnName="PRODUCTO_PK")
     * })
     */
    private $productoPk;

    /**
     * @var \Medida
     *
     * @ORM\ManyToOne(targetEntity="Medida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MEDIDA_PK", referencedColumnName="MEDIDA_PK")
     * })
     */
    private $medidaPk;
    
    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_1", type="boolean", nullable=true)
     */
    private $paso1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_2", type="boolean", nullable=true)
     */
    private $paso2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_3", type="boolean", nullable=true)
     */
    private $paso3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_4", type="boolean", nullable=true)
     */
    private $paso4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_5", type="boolean", nullable=true)
     */
    private $paso5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_6", type="boolean", nullable=true)
     */
    private $paso6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_7", type="boolean", nullable=true)
     */
    private $paso7;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_8", type="boolean", nullable=true)
     */
    private $paso8;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_9", type="boolean", nullable=true)
     */
    private $paso9;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_10", type="boolean", nullable=true)
     */
    private $paso10;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_11", type="boolean", nullable=true)
     */
    private $paso11;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_12", type="boolean", nullable=true)
     */
    private $paso12;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_13", type="boolean", nullable=true)
     */
    private $paso13;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_14", type="boolean", nullable=true)
     */
    private $paso14;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_15", type="boolean", nullable=true)
     */
    private $paso15;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PASO_16", type="boolean", nullable=true)
     */
    private $paso16;


    private $numFacturados;
    
    private $numCortesias;
    
    public function getNumFacturados() {
        return $this->numFacturados;
    }

    public function setNumFacturados($numFacturados) {
        $this->numFacturados = $numFacturados;
    }

    public function getNumCortesias() {
        return $this->numCortesias;
    }

    public function setNumCortesias($numCortesias) {
        $this->numCortesias = $numCortesias;
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
     * Set nombreProducto
     *
     * @param string $nombreProducto
     * @return PedidoProducto
     */
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    
        return $this;
    }

    /**
     * Get nombreProducto
     *
     * @return string 
     */
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return PedidoProducto
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set alto
     *
     * @param float $alto
     * @return PedidoProducto
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;
    
        return $this;
    }

    /**
     * Get alto
     *
     * @return float 
     */
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * Set ancho
     *
     * @param float $ancho
     * @return PedidoProducto
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    
        return $this;
    }

    /**
     * Get ancho
     *
     * @return float 
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set cortesia
     *
     * @param boolean $cortesia
     * @return PedidoProducto
     */
    public function setCortesia($cortesia)
    {
        $this->cortesia = $cortesia;
    
        return $this;
    }

    /**
     * Get cortesia
     *
     * @return boolean 
     */
    public function getCortesia()
    {
        return $this->cortesia;
    }
    
    /**
     * Get cortesia tabulada
     *
     * @return boolean 
     */
    public function getCortesiaTab()
    {
        if($this->cortesia == null){
            return 0;
        }else{
            return $this->cortesia;
        }
    }

    /**
     * Set precioVenta
     *
     * @param float $precioVenta
     * @return PedidoProducto
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;
    
        return $this;
    }

    /**
     * Get precioVenta
     *
     * @return float 
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    /**
     * Set tipoCalidadPk
     *
     * @param \Frontend\Bundle\Entity\TipoCalidad $tipoCalidadPk
     * @return PedidoProducto
     */
    public function setTipoCalidadPk(\Frontend\Bundle\Entity\TipoCalidad $tipoCalidadPk = null)
    {
        $this->tipoCalidadPk = $tipoCalidadPk;
    
        return $this;
    }

    /**
     * Get tipoCalidadPk
     *
     * @return \Frontend\Bundle\Entity\TipoCalidad 
     */
    public function getTipoCalidadPk()
    {
        return $this->tipoCalidadPk;
    }

    /**
     * Set pedidoPk
     *
     * @param \Frontend\Bundle\Entity\Pedido $pedidoPk
     * @return PedidoProducto
     */
    public function setPedidoPk(\Frontend\Bundle\Entity\Pedido $pedidoPk = null)
    {
        $this->pedidoPk = $pedidoPk;
    
        return $this;
    }

    /**
     * Get pedidoPk
     *
     * @return \Frontend\Bundle\Entity\Pedido 
     */
    public function getPedidoPk()
    {
        return $this->pedidoPk;
    }

    /**
     * Set productoPk
     *
     * @param \Frontend\Bundle\Entity\Producto $productoPk
     * @return PedidoProducto
     */
    public function setProductoPk(\Frontend\Bundle\Entity\Producto $productoPk = null)
    {
        $this->productoPk = $productoPk;
    
        return $this;
    }

    /**
     * Get productoPk
     *
     * @return \Frontend\Bundle\Entity\Producto 
     */
    public function getProductoPk()
    {
        return $this->productoPk;
    }

    /**
     * Set medidaPk
     *
     * @param \Frontend\Bundle\Entity\Medida $medidaPk
     * @return PedidoProducto
     */
    public function setMedidaPk(\Frontend\Bundle\Entity\Medida $medidaPk = null)
    {
        $this->medidaPk = $medidaPk;
    
        return $this;
    }

    /**
     * Get medidaPk
     *
     * @return \Frontend\Bundle\Entity\Medida 
     */
    public function getMedidaPk()
    {
        return $this->medidaPk;
    }
    
    /**
     * Set paso1
     *
     * @param boolean $paso1
     * @return Pedido
     */
    public function setPaso1($paso1)
    {
        $this->paso1 = $paso1;
    
        return $this;
    }

    /**
     * Get paso1
     *
     * @return boolean 
     */
    public function getPaso1()
    {
        return $this->paso1;
    }

    /**
     * Set paso2
     *
     * @param boolean $paso2
     * @return Pedido
     */
    public function setPaso2($paso2)
    {
        $this->paso2 = $paso2;
    
        return $this;
    }

    /**
     * Get paso2
     *
     * @return boolean 
     */
    public function getPaso2()
    {
        return $this->paso2;
    }

    /**
     * Set paso3
     *
     * @param boolean $paso3
     * @return Pedido
     */
    public function setPaso3($paso3)
    {
        $this->paso3 = $paso3;
    
        return $this;
    }

    /**
     * Get paso3
     *
     * @return boolean 
     */
    public function getPaso3()
    {
        return $this->paso3;
    }

    /**
     * Set paso4
     *
     * @param boolean $paso4
     * @return Pedido
     */
    public function setPaso4($paso4)
    {
        $this->paso4 = $paso4;
    
        return $this;
    }

    /**
     * Get paso4
     *
     * @return boolean 
     */
    public function getPaso4()
    {
        return $this->paso4;
    }

    /**
     * Set paso5
     *
     * @param boolean $paso5
     * @return Pedido
     */
    public function setPaso5($paso5)
    {
        $this->paso5 = $paso5;
    
        return $this;
    }

    /**
     * Get paso5
     *
     * @return boolean 
     */
    public function getPaso5()
    {
        return $this->paso5;
    }

    /**
     * Set paso6
     *
     * @param boolean $paso6
     * @return Pedido
     */
    public function setPaso6($paso6)
    {
        $this->paso6 = $paso6;
    
        return $this;
    }

    /**
     * Get paso6
     *
     * @return boolean 
     */
    public function getPaso6()
    {
        return $this->paso6;
    }

    /**
     * Set paso7
     *
     * @param boolean $paso7
     * @return Pedido
     */
    public function setPaso7($paso7)
    {
        $this->paso7 = $paso7;
    
        return $this;
    }

    /**
     * Get paso7
     *
     * @return boolean 
     */
    public function getPaso7()
    {
        return $this->paso7;
    }

    /**
     * Set paso8
     *
     * @param boolean $paso8
     * @return Pedido
     */
    public function setPaso8($paso8)
    {
        $this->paso8 = $paso8;
    
        return $this;
    }

    /**
     * Get paso8
     *
     * @return boolean 
     */
    public function getPaso8()
    {
        return $this->paso8;
    }

    /**
     * Set paso9
     *
     * @param boolean $paso9
     * @return Pedido
     */
    public function setPaso9($paso9)
    {
        $this->paso9 = $paso9;
    
        return $this;
    }

    /**
     * Get paso9
     *
     * @return boolean 
     */
    public function getPaso9()
    {
        return $this->paso9;
    }

    /**
     * Set paso10
     *
     * @param boolean $paso10
     * @return Pedido
     */
    public function setPaso10($paso10)
    {
        $this->paso10 = $paso10;
    
        return $this;
    }

    /**
     * Get paso10
     *
     * @return boolean 
     */
    public function getPaso10()
    {
        return $this->paso10;
    }

    /**
     * Set paso11
     *
     * @param boolean $paso11
     * @return Pedido
     */
    public function setPaso11($paso11)
    {
        $this->paso11 = $paso11;
    
        return $this;
    }

    /**
     * Get paso11
     *
     * @return boolean 
     */
    public function getPaso11()
    {
        return $this->paso11;
    }

    /**
     * Set paso12
     *
     * @param boolean $paso12
     * @return Pedido
     */
    public function setPaso12($paso12)
    {
        $this->paso12 = $paso12;
    
        return $this;
    }

    /**
     * Get paso12
     *
     * @return boolean 
     */
    public function getPaso12()
    {
        return $this->paso12;
    }

    /**
     * Set paso13
     *
     * @param boolean $paso13
     * @return Pedido
     */
    public function setPaso13($paso13)
    {
        $this->paso13 = $paso13;
    
        return $this;
    }

    /**
     * Get paso13
     *
     * @return boolean 
     */
    public function getPaso13()
    {
        return $this->paso13;
    }

    /**
     * Set paso14
     *
     * @param boolean $paso14
     * @return Pedido
     */
    public function setPaso14($paso14)
    {
        $this->paso14 = $paso14;
    
        return $this;
    }

    /**
     * Get paso14
     *
     * @return boolean 
     */
    public function getPaso14()
    {
        return $this->paso14;
    }

    /**
     * Set paso15
     *
     * @param boolean $paso15
     * @return Pedido
     */
    public function setPaso15($paso15)
    {
        $this->paso15 = $paso15;
    
        return $this;
    }

    /**
     * Get paso15
     *
     * @return boolean 
     */
    public function getPaso15()
    {
        return $this->paso15;
    }

    /**
     * Set paso16
     *
     * @param boolean $paso16
     * @return Pedido
     */
    public function setPaso16($paso16)
    {
        $this->paso16 = $paso16;
    
        return $this;
    }

    /**
     * Get paso16
     *
     * @return boolean 
     */
    public function getPaso16()
    {
        return $this->paso16;
    }
    
    public function getPrecioUnitario(){
        return $this->alto * $this->alto * $this->tipoCalidadPk->getValor();
        
    }

    public function getTotal(){
        return round($this->precioVenta * $this->cantidad,2);
    }
    
    public function getEmpezoProduccion(){
        if($this->paso1 || $this->paso2 || $this->paso3 || $this->paso4 || $this->paso5 || $this->paso6 || $this->paso7 || $this->paso8 || $this->paso9 || $this->paso10 || $this->paso11 || $this->paso12 || $this->paso13 || $this->paso14 || $this->paso15 || $this->paso16){
            return true;
        }
        return false;
    }
    
    public function setPasoPorNum($num,$valor){
        switch ($num)
        {
            case "1": $this->paso1 = $valor; break;
            case "2": $this->paso2 = $valor; break;
            case "3": $this->paso3 = $valor; break;
            case "4": $this->paso4 = $valor; break;
            case "5": $this->paso5 = $valor; break;
            case "6": $this->paso6 = $valor; break;
            case "7": $this->paso7 = $valor; break;
            case "8": $this->paso8 = $valor; break;
            case "9": $this->paso9 = $valor; break;
            case "10": $this->paso10 = $valor; break;
            case "11": $this->paso11 = $valor; break;
            case "12": $this->paso12 = $valor; break;
            case "13": $this->paso13 = $valor; break;
            case "14": $this->paso14 = $valor; break;
            case "15": $this->paso15 = $valor; break;
            case "16": $this->paso16 = $valor; break;
            default: "";
        }
    }
    
    public function getPasoPorNum($num){
        switch ($num)
        {
            case "1": return $this->paso1; break;
            case "2": return $this->paso2; break;
            case "3": return $this->paso3; break;
            case "4": return $this->paso4; break;
            case "5": return $this->paso5; break;
            case "6": return $this->paso6; break;
            case "7": return $this->paso7; break;
            case "8": return $this->paso8; break;
            case "9": return $this->paso9; break;
            case "10": return $this->paso10; break;
            case "11": return $this->paso11; break;
            case "12": return $this->paso12; break;
            case "13": return $this->paso13; break;
            case "14": return $this->paso14; break;
            case "15": return $this->paso15; break;
            case "16": return $this->paso16; break;
            default: return null;
        }
    }
    
    public function getNotasControlPp() {
        return $this->notasControlPp;
    }

    public function setNotasControlPp($notasControlPp) {
        $this->notasControlPp = $notasControlPp;
    }
}