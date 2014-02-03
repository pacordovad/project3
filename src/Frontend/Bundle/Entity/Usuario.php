<?php

namespace Frontend\Bundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USUARIO_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRES", type="string", nullable=false)
     */
    protected $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="APELLIDOS", type="string", nullable=false)
     */
    protected $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="CEDULA", type="string", length=11, nullable=true)
     */
    protected $cedula;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_NACIMIENTO", type="date", nullable=true)
     */
    protected $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO", type="string", length=64, nullable=false)
     */
    protected $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="CLAVE", type="string", length=64, nullable=false)
     */
    protected $clave;

    /**
     * @var \Cargo
     *
     * @ORM\ManyToOne(targetEntity="Cargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CARGO_PK", referencedColumnName="CARGO_PK",nullable=false)
     * })
     */
    protected $cargoPk;

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ROL_PK", referencedColumnName="ROL_PK",nullable=false)
     * })
     */
    protected $rolPk;

    
    /**
     * @ORM\Column(name="SALT", type="string", length=32,nullable=false)
     */
    protected $salt;

    public function __construct()
    {
        $this->salt = md5(uniqid(null, true));
    }
    
    /**
     * Get usuarioPk
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Usuario
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Usuario
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    
        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set cargoPk
     *
     * @param \Frontend\Bundle\Entity\Cargo $cargoPk
     * @return Usuario
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
     * Set rolPk
     *
     * @param \Frontend\Bundle\Entity\Rol $rolPk
     * @return Usuario
     */
    public function setRolPk(\Frontend\Bundle\Entity\Rol $rolPk = null)
    {
        $this->rolPk = $rolPk;
    
        return $this;
    }

    /**
     * Get rolPk
     *
     * @return \Frontend\Bundle\Entity\Rol 
     */
    public function getRolPk()
    {
        return $this->rolPk;
    }
    
    public function __toString() {
        return $this->nombres.' '.$this->apellidos;
    }
    
    
    
    /* Funciones heredadas. */
    
    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->usuario;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->clave;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_'.strtoupper($this->rolPk->getNombreRol()));
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array($this->getId()));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }
    
    /*public function __sleep() {
        // these are field names to be serialized, others will be excluded
        // but note that you have to fill other field values by your own
        return array('id', 'usuario', 'clave', 'salt');
    }*/
}