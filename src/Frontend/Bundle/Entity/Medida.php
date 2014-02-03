<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medida
 *
 * @ORM\Table(name="medida")
 * @ORM\Entity
 */
class Medida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MEDIDA_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="LARGO", type="integer", nullable=true)
     */
    private $largo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANCHO", type="integer", nullable=true)
     */
    private $ancho;

    /**
     * @var integer
     *
     * @ORM\Column(name="POSICION", type="integer", nullable=false)
     */
    private $posicion;

    /**
     * @var \Figura
     *
     * @ORM\ManyToOne(targetEntity="Figura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FIGURA_PK", referencedColumnName="FIGURA_PK", nullable=false)
     * })
     */
    private $figuraPk;



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
     * Set largo
     *
     * @param integer $largo
     * @return Medida
     */
    public function setLargo($largo)
    {
        $this->largo = $largo;
    
        return $this;
    }

    /**
     * Get largo
     *
     * @return integer 
     */
    public function getLargo()
    {
        return $this->largo;
    }

    /**
     * Set ancho
     *
     * @param integer $ancho
     * @return Medida
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    
        return $this;
    }

    /**
     * Get ancho
     *
     * @return integer 
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     * @return Medida
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

    /**
     * Set figuraPk
     *
     * @param \Frontend\Bundle\Entity\Figura $figuraPk
     * @return Medida
     */
    public function setFiguraPk(\Frontend\Bundle\Entity\Figura $figuraPk = null)
    {
        $this->figuraPk = $figuraPk;
    
        return $this;
    }

    /**
     * Get figuraPk
     *
     * @return \Frontend\Bundle\Entity\Figura 
     */
    public function getFiguraPk()
    {
        return $this->figuraPk;
    }
    
    public function __toString() {
        return $this->figuraPk.' ('.$this->ancho.' x '.$this->largo.')';
    }

}