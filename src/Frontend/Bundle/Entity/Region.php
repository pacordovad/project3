<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity
 */
class Region
{
    /**
     * @var integer
     *
     * @ORM\Column(name="REGION_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_REGION", type="string", length=64, nullable=false)
     */
    private $nombreRegion;
    
    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PAIS_PK", referencedColumnName="PAIS_PK", nullable=false)
     * })
     */
    private $paisPk;

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
     * Set nombreRegion
     *
     * @param string $nombreRegion
     * @return Region
     */
    public function setNombreRegion($nombreRegion)
    {
        $this->nombreRegion = $nombreRegion;
    
        return $this;
    }

    /**
     * Get nombreRegion
     *
     * @return string 
     */
    public function getNombreRegion()
    {
        return $this->nombreRegion;
    }
    
    /**
     * Set paisPk
     *
     * @param \Frontend\Bundle\Entity\Pais $paisPk
     * @return Provincia
     */
    public function setPaisPk(\Frontend\Bundle\Entity\Pais $paisPk = null)
    {
        $this->paisPk = $paisPk;
    
        return $this;
    }

    /**
     * Get paisPk
     *
     * @return \Frontend\Bundle\Entity\Pais 
     */
    public function getPaisPk()
    {
        return $this->paisPk;
    }
    
    public function __toString() {
        return $this->nombreRegion;
    }
}