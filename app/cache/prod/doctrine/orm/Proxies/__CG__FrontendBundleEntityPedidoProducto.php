<?php

namespace Proxies\__CG__\Frontend\Bundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PedidoProducto extends \Frontend\Bundle\Entity\PedidoProducto implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getNumFacturados()
    {
        $this->__load();
        return parent::getNumFacturados();
    }

    public function setNumFacturados($numFacturados)
    {
        $this->__load();
        return parent::setNumFacturados($numFacturados);
    }

    public function getNumCortesias()
    {
        $this->__load();
        return parent::getNumCortesias();
    }

    public function setNumCortesias($numCortesias)
    {
        $this->__load();
        return parent::setNumCortesias($numCortesias);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNombreProducto($nombreProducto)
    {
        $this->__load();
        return parent::setNombreProducto($nombreProducto);
    }

    public function getNombreProducto()
    {
        $this->__load();
        return parent::getNombreProducto();
    }

    public function setCantidad($cantidad)
    {
        $this->__load();
        return parent::setCantidad($cantidad);
    }

    public function getCantidad()
    {
        $this->__load();
        return parent::getCantidad();
    }

    public function setAlto($alto)
    {
        $this->__load();
        return parent::setAlto($alto);
    }

    public function getAlto()
    {
        $this->__load();
        return parent::getAlto();
    }

    public function setAncho($ancho)
    {
        $this->__load();
        return parent::setAncho($ancho);
    }

    public function getAncho()
    {
        $this->__load();
        return parent::getAncho();
    }

    public function setCortesia($cortesia)
    {
        $this->__load();
        return parent::setCortesia($cortesia);
    }

    public function getCortesia()
    {
        $this->__load();
        return parent::getCortesia();
    }

    public function getCortesiaTab()
    {
        $this->__load();
        return parent::getCortesiaTab();
    }

    public function setPrecioVenta($precioVenta)
    {
        $this->__load();
        return parent::setPrecioVenta($precioVenta);
    }

    public function getPrecioVenta()
    {
        $this->__load();
        return parent::getPrecioVenta();
    }

    public function setTipoCalidadPk(\Frontend\Bundle\Entity\TipoCalidad $tipoCalidadPk = NULL)
    {
        $this->__load();
        return parent::setTipoCalidadPk($tipoCalidadPk);
    }

    public function getTipoCalidadPk()
    {
        $this->__load();
        return parent::getTipoCalidadPk();
    }

    public function setPedidoPk(\Frontend\Bundle\Entity\Pedido $pedidoPk = NULL)
    {
        $this->__load();
        return parent::setPedidoPk($pedidoPk);
    }

    public function getPedidoPk()
    {
        $this->__load();
        return parent::getPedidoPk();
    }

    public function setProductoPk(\Frontend\Bundle\Entity\Producto $productoPk = NULL)
    {
        $this->__load();
        return parent::setProductoPk($productoPk);
    }

    public function getProductoPk()
    {
        $this->__load();
        return parent::getProductoPk();
    }

    public function setMedidaPk(\Frontend\Bundle\Entity\Medida $medidaPk = NULL)
    {
        $this->__load();
        return parent::setMedidaPk($medidaPk);
    }

    public function getMedidaPk()
    {
        $this->__load();
        return parent::getMedidaPk();
    }

    public function setPaso1($paso1)
    {
        $this->__load();
        return parent::setPaso1($paso1);
    }

    public function getPaso1()
    {
        $this->__load();
        return parent::getPaso1();
    }

    public function setPaso2($paso2)
    {
        $this->__load();
        return parent::setPaso2($paso2);
    }

    public function getPaso2()
    {
        $this->__load();
        return parent::getPaso2();
    }

    public function setPaso3($paso3)
    {
        $this->__load();
        return parent::setPaso3($paso3);
    }

    public function getPaso3()
    {
        $this->__load();
        return parent::getPaso3();
    }

    public function setPaso4($paso4)
    {
        $this->__load();
        return parent::setPaso4($paso4);
    }

    public function getPaso4()
    {
        $this->__load();
        return parent::getPaso4();
    }

    public function setPaso5($paso5)
    {
        $this->__load();
        return parent::setPaso5($paso5);
    }

    public function getPaso5()
    {
        $this->__load();
        return parent::getPaso5();
    }

    public function setPaso6($paso6)
    {
        $this->__load();
        return parent::setPaso6($paso6);
    }

    public function getPaso6()
    {
        $this->__load();
        return parent::getPaso6();
    }

    public function setPaso7($paso7)
    {
        $this->__load();
        return parent::setPaso7($paso7);
    }

    public function getPaso7()
    {
        $this->__load();
        return parent::getPaso7();
    }

    public function setPaso8($paso8)
    {
        $this->__load();
        return parent::setPaso8($paso8);
    }

    public function getPaso8()
    {
        $this->__load();
        return parent::getPaso8();
    }

    public function setPaso9($paso9)
    {
        $this->__load();
        return parent::setPaso9($paso9);
    }

    public function getPaso9()
    {
        $this->__load();
        return parent::getPaso9();
    }

    public function setPaso10($paso10)
    {
        $this->__load();
        return parent::setPaso10($paso10);
    }

    public function getPaso10()
    {
        $this->__load();
        return parent::getPaso10();
    }

    public function setPaso11($paso11)
    {
        $this->__load();
        return parent::setPaso11($paso11);
    }

    public function getPaso11()
    {
        $this->__load();
        return parent::getPaso11();
    }

    public function setPaso12($paso12)
    {
        $this->__load();
        return parent::setPaso12($paso12);
    }

    public function getPaso12()
    {
        $this->__load();
        return parent::getPaso12();
    }

    public function setPaso13($paso13)
    {
        $this->__load();
        return parent::setPaso13($paso13);
    }

    public function getPaso13()
    {
        $this->__load();
        return parent::getPaso13();
    }

    public function setPaso14($paso14)
    {
        $this->__load();
        return parent::setPaso14($paso14);
    }

    public function getPaso14()
    {
        $this->__load();
        return parent::getPaso14();
    }

    public function setPaso15($paso15)
    {
        $this->__load();
        return parent::setPaso15($paso15);
    }

    public function getPaso15()
    {
        $this->__load();
        return parent::getPaso15();
    }

    public function setPaso16($paso16)
    {
        $this->__load();
        return parent::setPaso16($paso16);
    }

    public function getPaso16()
    {
        $this->__load();
        return parent::getPaso16();
    }

    public function getPrecioUnitario()
    {
        $this->__load();
        return parent::getPrecioUnitario();
    }

    public function getTotal()
    {
        $this->__load();
        return parent::getTotal();
    }

    public function getEmpezoProduccion()
    {
        $this->__load();
        return parent::getEmpezoProduccion();
    }

    public function setPasoPorNum($num, $valor)
    {
        $this->__load();
        return parent::setPasoPorNum($num, $valor);
    }

    public function getPasoPorNum($num)
    {
        $this->__load();
        return parent::getPasoPorNum($num);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombreProducto', 'cantidad', 'alto', 'ancho', 'cortesia', 'precioVenta', 'paso1', 'paso2', 'paso3', 'paso4', 'paso5', 'paso6', 'paso7', 'paso8', 'paso9', 'paso10', 'paso11', 'paso12', 'paso13', 'paso14', 'paso15', 'paso16', 'tipoCalidadPk', 'pedidoPk', 'productoPk', 'medidaPk');
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