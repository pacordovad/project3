<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity
 */
class Provincia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PROVINCIA_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_PROVINCIA", type="string", length=64, nullable=false)
     */
    private $nombreProvincia;

    

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="REGION_PK", referencedColumnName="REGION_PK", nullable=false)
     * })
     */
    private $regionPk;



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
     * Set nombreProvincia
     *
     * @param string $nombreProvincia
     * @return Provincia
     */
    public function setNombreProvincia($nombreProvincia)
    {
        $this->nombreProvincia = $nombreProvincia;
    
        return $this;
    }

    /**
     * Get nombreProvincia
     *
     * @return string 
     */
    public function getNombreProvincia()
    {
        return $this->nombreProvincia;
    }

    /**
     * Set regionPk
     *
     * @param \Frontend\Bundle\Entity\Region $regionPk
     * @return Provincia
     */
    public function setRegionPk(\Frontend\Bundle\Entity\Region $regionPk = null)
    {
        $this->regionPk = $regionPk;
    
        return $this;
    }

    /**
     * Get regionPk
     *
     * @return \Frontend\Bundle\Entity\Region 
     */
    public function getRegionPk()
    {
        return $this->regionPk;
    }
    
    public function __toString() {
        return $this->nombreProvincia;
    }
}