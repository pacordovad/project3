<?php

namespace Proxies\__CG__\Frontend\Bundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Usuario extends \Frontend\Bundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNombres($nombres)
    {
        $this->__load();
        return parent::setNombres($nombres);
    }

    public function getNombres()
    {
        $this->__load();
        return parent::getNombres();
    }

    public function setApellidos($apellidos)
    {
        $this->__load();
        return parent::setApellidos($apellidos);
    }

    public function getApellidos()
    {
        $this->__load();
        return parent::getApellidos();
    }

    public function setCedula($cedula)
    {
        $this->__load();
        return parent::setCedula($cedula);
    }

    public function getCedula()
    {
        $this->__load();
        return parent::getCedula();
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->__load();
        return parent::setFechaNacimiento($fechaNacimiento);
    }

    public function getFechaNacimiento()
    {
        $this->__load();
        return parent::getFechaNacimiento();
    }

    public function setUsuario($usuario)
    {
        $this->__load();
        return parent::setUsuario($usuario);
    }

    public function getUsuario()
    {
        $this->__load();
        return parent::getUsuario();
    }

    public function setClave($clave)
    {
        $this->__load();
        return parent::setClave($clave);
    }

    public function getClave()
    {
        $this->__load();
        return parent::getClave();
    }

    public function setCargoPk(\Frontend\Bundle\Entity\Cargo $cargoPk = NULL)
    {
        $this->__load();
        return parent::setCargoPk($cargoPk);
    }

    public function getCargoPk()
    {
        $this->__load();
        return parent::getCargoPk();
    }

    public function setRolPk(\Frontend\Bundle\Entity\Rol $rolPk = NULL)
    {
        $this->__load();
        return parent::setRolPk($rolPk);
    }

    public function getRolPk()
    {
        $this->__load();
        return parent::getRolPk();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombres', 'apellidos', 'cedula', 'fechaNacimiento', 'usuario', 'clave', 'salt', 'cargoPk', 'rolPk');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}