<?php

namespace Proxies\__CG__\Frontend\Bundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Area extends \Frontend\Bundle\Entity\Area implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getCodigo()
    {
        $this->__load();
        return parent::getCodigo();
    }

    public function setCodigo($codigo)
    {
        $this->__load();
        return parent::setCodigo($codigo);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNombreArea($nombreArea)
    {
        $this->__load();
        return parent::setNombreArea($nombreArea);
    }

    public function getNombreArea()
    {
        $this->__load();
        return parent::getNombreArea();
    }

    public function setEmpresaPk(\Frontend\Bundle\Entity\Empresa $empresaPk = NULL)
    {
        $this->__load();
        return parent::setEmpresaPk($empresaPk);
    }

    public function getEmpresaPk()
    {
        $this->__load();
        return parent::getEmpresaPk();
    }

    public function getEmpresaArea()
    {
        $this->__load();
        return parent::getEmpresaArea();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getEtapa()
    {
        $this->__load();
        return parent::getEtapa();
    }

    public function setEtapa($etapa)
    {
        $this->__load();
        return parent::setEtapa($etapa);
    }

    public function addPedido(\Frontend\Bundle\Entity\Pedido $pedido)
    {
        $this->__load();
        return parent::addPedido($pedido);
    }

    public function getPedidos()
    {
        $this->__load();
        return parent::getPedidos();
    }

    public function getTotal()
    {
        $this->__load();
        return parent::getTotal();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombreArea', 'codigo', 'empresaPk');
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