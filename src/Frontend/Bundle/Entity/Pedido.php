<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PEDIDO_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_REGISTRO", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_ACTUALIZACION", type="datetime", nullable=false)
     */
    private $fechaActualizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="CONCEPTO_FACTURA", type="text", nullable=true)
     */
    private $conceptoFactura;

    /**
     * @var float
     *
     * @ORM\Column(name="DESCUENTO", type="decimal", nullable=true)
     */
    private $descuento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="APLICA_CONCEPTO_1", type="boolean", nullable=false)
     */
    private $aplicaConcepto1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="APLICA_CONCEPTO_2", type="boolean", nullable=false)
     */
    private $aplicaConcepto2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_APROBACION", type="date", nullable=true)
     */
    private $fechaAprobacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_MAXIMA_ENTREGA", type="date", nullable=true)
     */
    private $fechaMaximaEntrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="FINANCIAMIENTO", type="integer", nullable=true)
     */
    private $financiamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="FACTURA_NUM", type="text", nullable=true)
     */
    private $facturaNum;

    /**
     * @var string
     *
     * @ORM\Column(name="BANCO", type="string", length=32, nullable=true)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTAS", type="text", nullable=true)
     */
    private $notas;
    
    /**
     * @var string
     *
     * @ORM\Column(name="NOTAS_CONTROL", type="text", nullable=true)
     */
    private $notasControl;

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

    /**
     * @var float
     *
     * @ORM\Column(name="RETENCION_RENTA", type="decimal", nullable=true)
     */
    private $retencionRenta;

    /**
     * @var float
     *
     * @ORM\Column(name="RETENCION_IVA", type="decimal", nullable=true)
     */
    private $retencionIva;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="COORDINADOR_USUARIO_PK", referencedColumnName="USUARIO_PK")
     * })
     */
    private $coordinadorUsuarioPk;

    /**
     * @var \Contacto
     *
     * @ORM\ManyToOne(targetEntity="Contacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CONTACTO_PK", referencedColumnName="CONTACTO_PK")
     * })
     */
    private $contactoPk;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DELEGADO_1_USUARIO_PK", referencedColumnName="USUARIO_PK")
     * })
     */
    private $delegado1UsuarioPk;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DELEGADO_2_USUARIO_PK", referencedColumnName="USUARIO_PK")
     * })
     */
    private $delegado2UsuarioPk;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DELEGADO_3_USUARIO_PK", referencedColumnName="USUARIO_PK")
     * })
     */
    private $delegado3UsuarioPk;

    /**
     * @var \PasoPedido
     *
     * @ORM\ManyToOne(targetEntity="PasoPedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PASO_PEDIDOS_PK", referencedColumnName="PASO_PEDIDOS_PK")
     * })
     */
    private $pasoPedidosPk;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ULTIMA_ACTUALIZACION_USUARIO_PK", referencedColumnName="USUARIO_PK")
     * })
     */
    private $ultimaActualizacionUsuarioPk;

    /**
     * @var \ArrayCollection 
     * 
     * @ORM\OneToMany(targetEntity="PedidoProducto", mappedBy="pedidoPk", cascade={"persist","remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PEDIDO_PK", referencedColumnName="PEDIDO_PK")
     * })
     */
    protected $pedidoProducto;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ETAPA", type="integer", nullable=true)
     */
    private $etapa;

    public function getEtapa() {
        return $this->etapa;
    }

    public function setEtapa($etapa) {
        $this->etapa = $etapa;
    }
    
    public function __construct()
    {
        $this->pedidoProducto = new ArrayCollection();
    }
    
    public function getPedidoProducto()
    {
        return $this->pedidoProducto;
    }
    
    public function getNumPedidoProducto()
    {
        $num = 0;
        foreach ($this->pedidoProducto as $pedidoProducto) {
            $num += $pedidoProducto->getCantidad();
        }
        return $num;
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
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdRecur()
    {
        return "RECUR".$this->id;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Pedido
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    
        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return Pedido
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;
    
        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime 
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set conceptoFactura
     *
     * @param string $conceptoFactura
     * @return Pedido
     */
    public function setConceptoFactura($conceptoFactura)
    {
        $this->conceptoFactura = $conceptoFactura;
    
        return $this;
    }

    /**
     * Get conceptoFactura
     *
     * @return string 
     */
    public function getConceptoFactura()
    {
        return $this->conceptoFactura;
    }

    /**
     * Set descuento
     *
     * @param float $descuento
     * @return Pedido
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    
        return $this;
    }

    /**
     * Get descuento
     *
     * @return float 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set aplicaConcepto1
     *
     * @param boolean $aplicaConcepto1
     * @return Pedido
     */
    public function setAplicaConcepto1($aplicaConcepto1)
    {
        $this->aplicaConcepto1 = $aplicaConcepto1;
    
        return $this;
    }

    /**
     * Get aplicaConcepto1
     *
     * @return boolean 
     */
    public function getAplicaConcepto1()
    {
        return $this->aplicaConcepto1;
    }

    /**
     * Set aplicaConcepto2
     *
     * @param boolean $aplicaConcepto2
     * @return Pedido
     */
    public function setAplicaConcepto2($aplicaConcepto2)
    {
        $this->aplicaConcepto2 = $aplicaConcepto2;
    
        return $this;
    }

    /**
     * Get aplicaConcepto2
     *
     * @return boolean 
     */
    public function getAplicaConcepto2()
    {
        return $this->aplicaConcepto2;
    }

    /**
     * Set fechaAprobacion
     *
     * @param \DateTime $fechaAprobacion
     * @return Pedido
     */
    public function setFechaAprobacion($fechaAprobacion)
    {
        $this->fechaAprobacion = $fechaAprobacion;
    
        return $this;
    }

    /**
     * Get fechaAprobacion
     *
     * @return \DateTime 
     */
    public function getFechaAprobacion()
    {
        return $this->fechaAprobacion;
    }

    /**
     * Set fechaMaximaEntrega
     *
     * @param \DateTime $fechaMaximaEntrega
     * @return Pedido
     */
    public function setFechaMaximaEntrega($fechaMaximaEntrega)
    {
        $this->fechaMaximaEntrega = $fechaMaximaEntrega;
    
        return $this;
    }

    /**
     * Get fechaMaximaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaMaximaEntrega()
    {
        return $this->fechaMaximaEntrega;
    }

    /**
     * Set financiamiento
     *
     * @param integer $financiamiento
     * @return Pedido
     */
    public function setFinanciamiento($financiamiento)
    {
        $this->financiamiento = $financiamiento;
    
        return $this;
    }

    /**
     * Get financiamiento
     *
     * @return integer 
     */
    public function getFinanciamiento()
    {
        return $this->financiamiento;
    }

    /**
     * Set facturaNum
     *
     * @param string $facturaNum
     * @return Pedido
     */
    public function setFacturaNum($facturaNum)
    {
        $this->facturaNum = $facturaNum;
    
        return $this;
    }

    /**
     * Get facturaNum
     *
     * @return string 
     */
    public function getFacturaNum()
    {
        return $this->facturaNum;
    }

    /**
     * Set banco
     *
     * @param string $banco
     * @return Pedido
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    
        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return Pedido
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;
    
        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
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

    /**
     * Set retencionRenta
     *
     * @param float $retencionRenta
     * @return Pedido
     */
    public function setRetencionRenta($retencionRenta)
    {
        $this->retencionRenta = $retencionRenta;
    
        return $this;
    }

    /**
     * Get retencionRenta
     *
     * @return float 
     */
    public function getRetencionRenta()
    {
        return $this->retencionRenta;
    }

    /**
     * Set retencionIva
     *
     * @param float $retencionIva
     * @return Pedido
     */
    public function setRetencionIva($retencionIva)
    {
        $this->retencionIva = $retencionIva;
    
        return $this;
    }

    /**
     * Get retencionIva
     *
     * @return float 
     */
    public function getRetencionIva()
    {
        return $this->retencionIva;
    }

    /**
     * Set coordinadorUsuarioPk
     *
     * @param \Frontend\Bundle\Entity\Usuario $coordinadorUsuarioPk
     * @return Pedido
     */
    public function setCoordinadorUsuarioPk(\Frontend\Bundle\Entity\Usuario $coordinadorUsuarioPk = null)
    {
        $this->coordinadorUsuarioPk = $coordinadorUsuarioPk;
    
        return $this;
    }

    /**
     * Get coordinadorUsuarioPk
     *
     * @return \Frontend\Bundle\Entity\Usuario 
     */
    public function getCoordinadorUsuarioPk()
    {
        return $this->coordinadorUsuarioPk;
    }

    /**
     * Set contactoPk
     *
     * @param \Frontend\Bundle\Entity\Contacto $contactoPk
     * @return Pedido
     */
    public function setContactoPk(\Frontend\Bundle\Entity\Contacto $contactoPk = null)
    {
        $this->contactoPk = $contactoPk;
    
        return $this;
    }

    /**
     * Get contactoPk
     *
     * @return \Frontend\Bundle\Entity\Contacto 
     */
    public function getContactoPk()
    {
        return $this->contactoPk;
    }

    /**
     * Set delegado1UsuarioPk
     *
     * @param \Frontend\Bundle\Entity\Usuario $delegado1UsuarioPk
     * @return Pedido
     */
    public function setDelegado1UsuarioPk(\Frontend\Bundle\Entity\Usuario $delegado1UsuarioPk = null)
    {
        $this->delegado1UsuarioPk = $delegado1UsuarioPk;
    
        return $this;
    }

    /**
     * Get delegado1UsuarioPk
     *
     * @return \Frontend\Bundle\Entity\Usuario 
     */
    public function getDelegado1UsuarioPk()
    {
        return $this->delegado1UsuarioPk;
    }

    /**
     * Set delegado2UsuarioPk
     *
     * @param \Frontend\Bundle\Entity\Usuario $delegado2UsuarioPk
     * @return Pedido
     */
    public function setDelegado2UsuarioPk(\Frontend\Bundle\Entity\Usuario $delegado2UsuarioPk = null)
    {
        $this->delegado2UsuarioPk = $delegado2UsuarioPk;
    
        return $this;
    }

    /**
     * Get delegado2UsuarioPk
     *
     * @return \Frontend\Bundle\Entity\Usuario 
     */
    public function getDelegado2UsuarioPk()
    {
        return $this->delegado2UsuarioPk;
    }

    /**
     * Set delegado3UsuarioPk
     *
     * @param \Frontend\Bundle\Entity\Usuario $delegado3UsuarioPk
     * @return Pedido
     */
    public function setDelegado3UsuarioPk(\Frontend\Bundle\Entity\Usuario $delegado3UsuarioPk = null)
    {
        $this->delegado3UsuarioPk = $delegado3UsuarioPk;
    
        return $this;
    }

    /**
     * Get delegado3UsuarioPk
     *
     * @return \Frontend\Bundle\Entity\Usuario 
     */
    public function getDelegado3UsuarioPk()
    {
        return $this->delegado3UsuarioPk;
    }

    /**
     * Set pasoPedidosPk
     *
     * @param \Frontend\Bundle\Entity\PasoPedido $pasoPedidosPk
     * @return Pedido
     */
    public function setPasoPedidosPk(\Frontend\Bundle\Entity\PasoPedido $pasoPedidosPk = null)
    {
        $this->pasoPedidosPk = $pasoPedidosPk;
    
        return $this;
    }

    /**
     * Get pasoPedidosPk
     *
     * @return \Frontend\Bundle\Entity\PasoPedido 
     */
    public function getPasoPedidosPk()
    {
        return $this->pasoPedidosPk;
    }

    /**
     * Set ultimaActualizacionUsuarioPk
     *
     * @param \Frontend\Bundle\Entity\Usuario $ultimaActualizacionUsuarioPk
     * @return Pedido
     */
    public function setUltimaActualizacionUsuarioPk(\Frontend\Bundle\Entity\Usuario $ultimaActualizacionUsuarioPk = null)
    {
        $this->ultimaActualizacionUsuarioPk = $ultimaActualizacionUsuarioPk;
    
        return $this;
    }

    /**
     * Get ultimaActualizacionUsuarioPk
     *
     * @return \Frontend\Bundle\Entity\Usuario 
     */
    public function getUltimaActualizacionUsuarioPk()
    {
        return $this->ultimaActualizacionUsuarioPk;
    }
    
    public function addPedidoProducto(PedidoProducto $pedidoProducto)
    {
        $this->pedidoProducto->add($pedidoProducto);
    }
    
    public function removePedidoProducto(PedidoProducto $pedidoProducto)
    {
        $this->pedidoProducto->removeElement($pedidoProducto);
    }
    
    public function removeTodosPedidoProducto()
    {
        $this->pedidoProducto = new ArrayCollection();
    }

    /*public function removePedidoProducto(Tag $tag)
    {
        // ...
    }*/
    
    public function __toString() {
        return "".$this->id;
    }
    
    public function getFinalizado(){
        if($this->paso1 && $this->paso2 && $this->paso3 && $this->paso4 && $this->paso5 && $this->paso6 && $this->paso7 && $this->paso8 && $this->paso9 && $this->paso10 && $this->paso11 && $this->paso12 && $this->paso13 && $this->paso14 && $this->paso15 && $this->paso16){
            return true;
        }
        return false;
    }
    
    public function getSubtotalSinDescuento(){
        $subtotal = 0;
        foreach($this->pedidoProducto as $pedidoProducto){
            if(!$pedidoProducto->getCortesia()){
                $subtotal += $pedidoProducto->getTotal();
            }
        }
        return round($subtotal,2);
    }
    
    public function getTotalDescuento(){
        $descuento = (!empty($this->descuento))? $this->descuento : 0;
        return round($this->getSubtotalSinDescuento() * $descuento / 100,2);
    }
    
    public function getCuota(){
        $subtotal = $this->getSubtotal();
        $cuota = $subtotal;
        if(!empty($this->financiamiento) && is_numeric($this->financiamiento)){
            $cuota = $subtotal / $this->financiamiento;
        }
        return $cuota;
    }
    
    public function getIvaCuota(){
        return round($this->getCuota() * 0.12,2);
    }
    
    public function getTotalCuota(){
        return round($this->getCuota() + $this->getIvaCuota(),2);
    }
    
    public function getSubtotal(){
        $subtotal = 0;
        foreach($this->pedidoProducto as $pedidoProducto){
            if(!$pedidoProducto->getCortesia()){
                $subtotal += $pedidoProducto->getTotal();
            }
        }
        $descuento = (!empty($this->descuento))? $this->descuento : 0;
        return round($subtotal - ($subtotal * $descuento / 100),2);
    }
    
    public function getIva(){
        return round($this->getSubtotal() * 0.12,2);
    }
    
    public function getTotal(){
        return round($this->getSubtotal() + $this->getIva(),2);
    }
    
    public function getRetencionRentaTotal(){
        $retencionRenta = (!empty($this->retencionRenta))? $this->retencionRenta : 0;
        return round($this->getSubtotal() * $retencionRenta / 100,2);
    }
    
    public function getRetencionIvaTotal(){
        $retencionIva = (!empty($this->retencionIva))? $this->retencionIva : 0;
        return round($this->getIva() * $retencionIva / 100,2);
    }
    
    public function getLiquido(){
        return round($this->getTotal() - $this->getRetencionIvaTotal() - $this->getRetencionRentaTotal(),2);        
    }
    
    public function getRetenido(){
        return round($this->getRetencionRentaTotal() + $this->getRetencionIvaTotal(),2);
    }
    
    public function getChecks(){
        $checks = 0;
        $checks += ($this->paso1)?1:0;
        $checks += ($this->paso2)?1:0;
        $checks += ($this->paso3)?1:0;
        $checks += ($this->paso4)?1:0;
        $checks += ($this->paso5)?1:0;
        $checks += ($this->paso6)?1:0;
        $checks += ($this->paso7)?1:0;
        $checks += ($this->paso8)?1:0;
        $checks += ($this->paso9)?1:0;
        $checks += ($this->paso10)?1:0;
        $checks += ($this->paso11)?1:0;
        $checks += ($this->paso12)?1:0;
        $checks += ($this->paso13)?1:0;
        $checks += ($this->paso14)?1:0;
        $checks += ($this->paso15)?1:0;
        $checks += ($this->paso16)?1:0;
        
        return $checks;
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
    
    public function getNotasControl() {
        return $this->notasControl;
    }

    public function setNotasControl($notasControl) {
        $this->notasControl = $notasControl;
    }
}