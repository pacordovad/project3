<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad")
 * @ORM\Entity
 */
class Ciudad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CIUDAD_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_CIUDAD", type="string", length=64, nullable=false)
     */
    private $nombreCiudad;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PROVINCIA_PK", referencedColumnName="PROVINCIA_PK")
     * })
     */
    private $provinciaPk;

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
     * Set nombreCiudad
     *
     * @param string $nombreCiudad
     * @return Ciudad
     */
    public function setNombreCiudad($nombreCiudad)
    {
        $this->nombreCiudad = $nombreCiudad;
    
        return $this;
    }

    /**
     * Get nombreCiudad
     *
     * @return string 
     */
    public function getNombreCiudad()
    {
        return $this->nombreCiudad;
    }

    /**
     * Set provinciaPk
     *
     * @param \Frontend\Bundle\Entity\Provincia $provinciaPk
     * @return Ciudad
     */
    public function setProvinciaPk(\Frontend\Bundle\Entity\Provincia $provinciaPk = null)
    {
        $this->provinciaPk = $provinciaPk;
    
        return $this;
    }

    /**
     * Get provinciaPk
     *
     * @return \Frontend\Bundle\Entity\Provincia 
     */
    public function getProvinciaPk()
    {
        return $this->provinciaPk;
    }
    
    public function __toString() {
        return $this->nombreCiudad;
    }
    
    public function getCiudadPais() {
        return $this->nombreCiudad.", ".$this->provinciaPk->getRegionPk()->getPaisPk();
    }
}