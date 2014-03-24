<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity
 */
class Pais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PAIS_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_PAIS", type="string", length=64, nullable=false)
     */
    private $nombrePais;

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
     * Set nombrePais
     *
     * @param string $nombrePais
     * @return Pais
     */
    public function setNombrePais($nombrePais)
    {
        $this->nombrePais = $nombrePais;
    
        return $this;
    }

    /**
     * Get nombrePais
     *
     * @return string 
     */
    public function getNombrePais()
    {
        return $this->nombrePais;
    }
    
    public function __toString() {
        return $this->nombrePais;
    }
}