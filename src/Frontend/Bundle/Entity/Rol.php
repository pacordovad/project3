<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ROL_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $rolPk;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_ROL", type="string", length=64, nullable=false)
     */
    protected $nombreRol;



    /**
     * Get rolPk
     *
     * @return integer 
     */
    public function getRolPk()
    {
        return $this->rolPk;
    }

    /**
     * Set nombreRol
     *
     * @param string $nombreRol
     * @return Rol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;
    
        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string 
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }
    
    public function __toString() {
        return $this->nombreRol;
    }
}