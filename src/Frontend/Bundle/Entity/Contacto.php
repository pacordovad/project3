<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contacto
 *
 * @ORM\Table(name="contacto")
 * @ORM\Entity
 */
class Contacto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CONTACTO_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES_CONTACTO", type="string", length=64, nullable=false)
     */
    private $nombresContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS_CONTACTO", type="string", length=64, nullable=false)
     */
    private $apellidosContacto;

    /**
     * @var string
     * @ORM\Column(name="TELEFONO", type="string", length=16, nullable=true)
     * @Assert\Regex(pattern="/^[0-9]+$/",message="Ingrese solo dígitos")
     * @Assert\Length(max="10",maxMessage="Valor muy largo. Debería tener 10 caracteres o menos.")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="EXTENSION", type="string", length=8, nullable=true)
     */
    private $extension;

    /**
     * @var string
     * @Assert\Length(max="10",maxMessage="Valor muy largo. Debería tener 10 caracteres o menos.")
     * @Assert\Regex(pattern="/^[0-9]+$/",message="Ingrese solo dígitos")
     * @ORM\Column(name="CELULAR_1", type="string", length=16, nullable=true)
     */
    private $celular1;

    /**
     * @var string
     * @Assert\Length(max="10",maxMessage="Valor muy largo. Debería tener 10 caracteres o menos.")
     * @Assert\Regex(pattern="/^[0-9]+$/",message="Ingrese solo dígitos")
     * @ORM\Column(name="CELULAR_2", type="string", length=16, nullable=true)
     */
    private $celular2;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO_TRABAJO", type="string", length=64, nullable=true)
     */
    private $correoTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="CORREO_ALTERNATIVO", type="string", length=64, nullable=true)
     */
    private $correoAlternativo;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var \Area
     *
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AREA_PK", referencedColumnName="AREA_PK")
     * })
     */
    private $areaPk;

    /**
     * @var \Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CIUDAD_PK", referencedColumnName="CIUDAD_PK")
     * })
     */
    private $ciudadPk;

    /**
     * @var \Cargo
     *
     * @ORM\ManyToOne(targetEntity="Cargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CARGO_PK", referencedColumnName="CARGO_PK")
     * })
     */
    private $cargoPk;

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
     * Set nombresContacto
     *
     * @param string $nombresContacto
     * @return Contacto
     */
    public function setNombresContacto($nombresContacto)
    {
        $this->nombresContacto = $nombresContacto;
    
        return $this;
    }

    /**
     * Get nombresContacto
     *
     * @return string 
     */
    public function getNombresContacto()
    {
        return $this->nombresContacto;
    }

    /**
     * Set apellidosContacto
     *
     * @param string $apellidosContacto
     * @return Contacto
     */
    public function setApellidosContacto($apellidosContacto)
    {
        $this->apellidosContacto = $apellidosContacto;
    
        return $this;
    }

    /**
     * Get apellidosContacto
     *
     * @return string 
     */
    public function getApellidosContacto()
    {
        return $this->apellidosContacto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Contacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return Contacto
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    
        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set celular1
     *
     * @param string $celular1
     * @return Contacto
     */
    public function setCelular1($celular1)
    {
        $this->celular1 = $celular1;
    
        return $this;
    }

    /**
     * Get celular1
     *
     * @return string 
     */
    public function getCelular1()
    {
        return $this->celular1;
    }

    /**
     * Set celular2
     *
     * @param string $celular2
     * @return Contacto
     */
    public function setCelular2($celular2)
    {
        $this->celular2 = $celular2;
    
        return $this;
    }

    /**
     * Get celular2
     *
     * @return string 
     */
    public function getCelular2()
    {
        return $this->celular2;
    }

    /**
     * Set correoTrabajo
     *
     * @param string $correoTrabajo
     * @return Contacto
     */
    public function setCorreoTrabajo($correoTrabajo)
    {
        $this->correoTrabajo = $correoTrabajo;
    
        return $this;
    }

    /**
     * Get correoTrabajo
     *
     * @return string 
     */
    public function getCorreoTrabajo()
    {
        return $this->correoTrabajo;
    }

    /**
     * Set correoAlternativo
     *
     * @param string $correoAlternativo
     * @return Contacto
     */
    public function setCorreoAlternativo($correoAlternativo)
    {
        $this->correoAlternativo = $correoAlternativo;
    
        return $this;
    }

    /**
     * Get correoAlternativo
     *
     * @return string 
     */
    public function getCorreoAlternativo()
    {
        return $this->correoAlternativo;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Contacto
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set areaPk
     *
     * @param \Frontend\Bundle\Entity\Area $areaPk
     * @return Contacto
     */
    public function setAreaPk(\Frontend\Bundle\Entity\Area $areaPk = null)
    {
        $this->areaPk = $areaPk;
    
        return $this;
    }

    /**
     * Get areaPk
     *
     * @return \Frontend\Bundle\Entity\Area 
     */
    public function getAreaPk()
    {
        return $this->areaPk;
    }

    /**
     * Set ciudadPk
     *
     * @param \Frontend\Bundle\Entity\Ciudad $ciudadPk
     * @return Contacto
     */
    public function setCiudadPk(\Frontend\Bundle\Entity\Ciudad $ciudadPk = null)
    {
        $this->ciudadPk = $ciudadPk;
    
        return $this;
    }

    /**
     * Get ciudadPk
     *
     * @return \Frontend\Bundle\Entity\Ciudad 
     */
    public function getCiudadPk()
    {
        return $this->ciudadPk;
    }

    /**
     * Set cargoPk
     *
     * @param \Frontend\Bundle\Entity\Cargo $cargoPk
     * @return Contacto
     */
    public function setCargoPk(\Frontend\Bundle\Entity\Cargo $cargoPk = null)
    {
        $this->cargoPk = $cargoPk;
    
        return $this;
    }

    /**
     * Get cargoPk
     *
     * @return \Frontend\Bundle\Entity\Cargo 
     */
    public function getCargoPk()
    {
        return $this->cargoPk;
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
    public function __toString() {
        return $this->nombresContacto." ".$this->apellidosContacto;
    }
    
    public function getAreaContacto() {
        return $this->areaPk->getCodigo().' - '.$this->areaPk->getNombreArea().' - '.$this->nombresContacto.' '.$this->apellidosContacto;
    }
    
    public function getAreaEmpresaContacto() {
        return $this->areaPk->getEmpresaPk().' - '.$this->areaPk->getNombreArea().' - '.$this->nombresContacto.' '.$this->apellidosContacto;
    }
}