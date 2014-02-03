<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="tarea")
 * @ORM\Entity
 */
class Tarea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TAREA_PK", type="integer", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="TEMA", type="string", length=256, nullable=true)
     */
    private $tema;

    /**
     * @var float
     *
     * @ORM\Column(name="VALOR_APROXIMADO", type="decimal", nullable=true)
     */
    private $valorAproximado;

    /**
     * @var string
     *
     * @ORM\Column(name="RESOLUCION_1", type="string", length=256, nullable=true)
     */
    private $resolucion1;

    /**
     * @var string
     *
     * @ORM\Column(name="RESOLUCION_2", type="string", length=256, nullable=true)
     */
    private $resolucion2;

    /**
     * @var string
     *
     * @ORM\Column(name="SELECCION", type="string", length=256, nullable=true)
     */
    private $seleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="CUMPLIDO", type="string", length=256, nullable=true)
     */
    private $cumplido;

    /**
     * @var string
     *
     * @ORM\Column(name="RESULTADO", type="string", length=256, nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="NOTAS", type="string", length=256, nullable=true)
     */
    private $notas;

    /**
     * @var \Area
     *
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AREA_PK", referencedColumnName="AREA_PK")
     * })
     */
    private $areaPk;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="USUARIO_PK", referencedColumnName="USUARIO_PK")
     * })
     */
    private $usuarioPk;



    /**
     * Get tareaPk
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Tarea
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
     * Set tema
     *
     * @param string $tema
     * @return Tarea
     */
    public function setTema($tema)
    {
        $this->tema = $tema;
    
        return $this;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set valorAproximado
     *
     * @param float $valorAproximado
     * @return Tarea
     */
    public function setValorAproximado($valorAproximado)
    {
        $this->valorAproximado = $valorAproximado;
    
        return $this;
    }

    /**
     * Get valorAproximado
     *
     * @return float 
     */
    public function getValorAproximado()
    {
        return $this->valorAproximado;
    }

    /**
     * Set resolucion1
     *
     * @param string $resolucion1
     * @return Tarea
     */
    public function setResolucion1($resolucion1)
    {
        $this->resolucion1 = $resolucion1;
    
        return $this;
    }

    /**
     * Get resolucion1
     *
     * @return string 
     */
    public function getResolucion1()
    {
        return $this->resolucion1;
    }

    /**
     * Set resolucion2
     *
     * @param string $resolucion2
     * @return Tarea
     */
    public function setResolucion2($resolucion2)
    {
        $this->resolucion2 = $resolucion2;
    
        return $this;
    }

    /**
     * Get resolucion2
     *
     * @return string 
     */
    public function getResolucion2()
    {
        return $this->resolucion2;
    }

    /**
     * Set seleccion
     *
     * @param string $seleccion
     * @return Tarea
     */
    public function setSeleccion($seleccion)
    {
        $this->seleccion = $seleccion;
    
        return $this;
    }

    /**
     * Get seleccion
     *
     * @return string 
     */
    public function getSeleccion()
    {
        return $this->seleccion;
    }

    /**
     * Set cumplido
     *
     * @param string $cumplido
     * @return Tarea
     */
    public function setCumplido($cumplido)
    {
        $this->cumplido = $cumplido;
    
        return $this;
    }

    /**
     * Get cumplido
     *
     * @return string 
     */
    public function getCumplido()
    {
        return $this->cumplido;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return Tarea
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    
        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return Tarea
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
     * Set areaPk
     *
     * @param \Frontend\Bundle\Entity\Area $areaPk
     * @return Tarea
     */
    public function setAreaPk(\Frontend\Bundle\Entity\Area $areaPk = null)
    {
        $this->areaPk = $areaPk;
    
        return $this;
    }

    /**
     * Get areaPk
     *
     * @return \Frontend\Bundle\Entity\Area 
     */
    public function getAreaPk()
    {
        return $this->areaPk;
    }

    /**
     * Set usuarioPk
     *
     * @param \Frontend\Bundle\Entity\Usuario $usuarioPk
     * @return Tarea
     */
    public function setUsuarioPk(\Frontend\Bundle\Entity\Usuario $usuarioPk = null)
    {
        $this->usuarioPk = $usuarioPk;
    
        return $this;
    }

    /**
     * Get usuarioPk
     *
     * @return \Frontend\Bundle\Entity\Usuario 
     */
    public function getUsuarioPk()
    {
        return $this->usuarioPk;
    }
}