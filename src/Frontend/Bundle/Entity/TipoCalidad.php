<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCalidad
 *
 * @ORM\Table(name="tipo_calidad")
 * @ORM\Entity
 */
class TipoCalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TIPO_CALIDAD_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_TIPO_CALIDAD", type="string", length=64, nullable=false)
     */
    private $nombreTipoCalidad;

    /**
     * @var float
     *
     * @ORM\Column(name="VALOR", type="decimal", nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="POSICION", type="integer", nullable=false)
     */
    private $posicion;



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
     * Set nombreTipoCalidad
     *
     * @param string $nombreTipoCalidad
     * @return TipoCalidad
     */
    public function setNombreTipoCalidad($nombreTipoCalidad)
    {
        $this->nombreTipoCalidad = $nombreTipoCalidad;
    
        return $this;
    }

    /**
     * Get nombreTipoCalidad
     *
     * @return string 
     */
    public function getNombreTipoCalidad()
    {
        return $this->nombreTipoCalidad;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return TipoCalidad
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     * @return TipoCalidad
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;
    
        return $this;
    }

    /**
     * Get posicion
     *
     * @return integer 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }
    
    public function __toString() {
        return $this->nombreTipoCalidad;
    }
}