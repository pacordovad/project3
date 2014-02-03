<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasoPedido
 *
 * @ORM\Table(name="paso_pedido")
 * @ORM\Entity
 */
class PasoPedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PASO_PEDIDOS_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_PASO", type="string", length=64, nullable=false)
     */
    private $nombrePaso;

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
     * Set nombrePaso
     *
     * @param string $nombrePaso
     * @return PasoPedido
     */
    public function setNombrePaso($nombrePaso)
    {
        $this->nombrePaso = $nombrePaso;
    
        return $this;
    }

    /**
     * Get nombrePaso
     *
     * @return string 
     */
    public function getNombrePaso()
    {
        return $this->nombrePaso;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     * @return PasoPedido
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
        return $this->nombrePaso;
    }
}