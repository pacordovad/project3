<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Figura
 *
 * @ORM\Table(name="figura")
 * @ORM\Entity
 */
class Figura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="FIGURA_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_FIGURA", type="string", length=64, nullable=false)
     */
    private $nombreFigura;

    /**
     * @var integer
     *
     * @ORM\Column(name="POSICION_FIGURA", type="integer", nullable=false)
     */
    private $posicionFigura;



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
     * Set nombreFigura
     *
     * @param string $nombreFigura
     * @return Figura
     */
    public function setNombreFigura($nombreFigura)
    {
        $this->nombreFigura = $nombreFigura;
    
        return $this;
    }

    /**
     * Get nombreFigura
     *
     * @return string 
     */
    public function getNombreFigura()
    {
        return $this->nombreFigura;
    }

    /**
     * Set posicionFigura
     *
     * @param integer $posicionFigura
     * @return Figura
     */
    public function setPosicionFigura($posicionFigura)
    {
        $this->posicionFigura = $posicionFigura;
    
        return $this;
    }

    /**
     * Get posicionFigura
     *
     * @return integer 
     */
    public function getPosicionFigura()
    {
        return $this->posicionFigura;
    }
    
    public function __toString() {
        return $this->nombreFigura;
    }
}