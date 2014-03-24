<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargo
 *
 * @ORM\Table(name="cargo")
 * @ORM\Entity
 */
class Cargo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CARGO_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_CARGO", type="string", length=64, nullable=false)
     */
    protected $nombreCargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="POSICION", type="integer", nullable=false)
     */
    private $posicion;
    
    public function getPosicion() {
        return $this->posicion;
    }

    public function setPosicion($posicion) {
        $this->posicion = $posicion;
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
     * Set nombreCargo
     *
     * @param string $nombreCargo
     * @return Cargo
     */
    public function setNombreCargo($nombreCargo)
    {
        $this->nombreCargo = $nombreCargo;
    
        return $this;
    }

    /**
     * Get nombreCargo
     *
     * @return string 
     */
    public function getNombreCargo()
    {
        return $this->nombreCargo;
    }
    
    public function __toString() {
        return $this->nombreCargo;
    }

}