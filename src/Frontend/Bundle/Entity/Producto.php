<?php

namespace Frontend\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PRODUCTO_PK", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_IMAGEN", type="string", length=64, nullable=false)
     */
    private $nombreImagen;

    /**
     * @var string
     * @ORM\Column(name="IMAGEN_EXTENSION", type="string", length=256, nullable=false)
     */
    private $imagenExtension;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_MODIFICACION", type="datetime", nullable=false)
     */
    private $fechaModificacion;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $imagen;
    
    public function getFechaModificacion() {
        return $this->fechaModificacion;
    }

    public function setFechaModificacion(\DateTime $fechaModificacion) {
        $this->fechaModificacion = $fechaModificacion;
    }

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CATEGORIA_PK", referencedColumnName="CATEGORIA_PK")
     * })
     */
    private $categoriaPk;

    /**
     * @var \Figura
     *
     * @ORM\ManyToOne(targetEntity="Figura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FIGURA_PK", referencedColumnName="FIGURA_PK")
     * })
     */
    private $figuraPk;

    private $temp;

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
     * Set nombreImagen
     *
     * @param string $nombreImagen
     * @return Producto
     */
    public function setNombreImagen($nombreImagen)
    {
        $this->nombreImagen = $nombreImagen;
    
        return $this;
    }

    /**
     * Get nombreImagen
     *
     * @return string 
     */
    public function getNombreImagen()
    {
        return $this->nombreImagen;
    }

    /**
     * Set imagenExtension
     *
     * @param string $imagenExtension
     * @return Producto
     */
    public function setImagenExtension($imagenExtension)
    {
        $this->imagenExtension = $imagenExtension;
    
        return $this;
    }

    /**
     * Get imagenExtension
     *
     * @return string 
     */
    public function getImagenExtension()
    {
        return $this->imagenExtension;
    }
    
    /**
     * Set imagenExtension
     *
     * @param UploadedFile $imagen
     * @return Producto
     */
    public function setImagen(UploadedFile $imagen = null)
    {
        
        $this->imagen = $imagen;
        
        // check if we have an old image path
        if (is_file($this->getAbsolutePath())) {
            // store the old name to delete after the update
            $this->temp = $this->getAbsolutePath();
        } else {
            $this->imagenExtension = 'initial';
        }
        
        return $this;
    }

    /**
     * Get imagenExtension
     *
     * @return UploadedFile 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set categoriaPk
     *
     * @param \Frontend\Bundle\Entity\Categoria $categoriaPk
     * @return Producto
     */
    public function setCategoriaPk(\Frontend\Bundle\Entity\Categoria $categoriaPk = null)
    {
        $this->categoriaPk = $categoriaPk;
    
        return $this;
    }

    /**
     * Get categoriaPk
     *
     * @return \Frontend\Bundle\Entity\Categoria 
     */
    public function getCategoriaPk()
    {
        return $this->categoriaPk;
    }

    /**
     * Set figuraPk
     *
     * @param \Frontend\Bundle\Entity\Figura $figuraPk
     * @return Producto
     */
    public function setFiguraPk(\Frontend\Bundle\Entity\Figura $figuraPk = null)
    {
        $this->figuraPk = $figuraPk;
    
        return $this;
    }

    /**
     * Get figuraPk
     *
     * @return \Frontend\Bundle\Entity\Figura 
     */
    public function getFiguraPk()
    {
        return $this->figuraPk;
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {        
        if (null === $this->getImagen()) {
            return;
        }

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->temp);
            // clear the temp image path
            $this->temp = null;
        }

        // you must throw an exception here if the file cannot be moved
        // so that the entity is not persisted to the database
        // which the UploadedFile move() method does
        $this->getImagen()->move(
            $this->getUploadRootDir(),
            'p'.$this->id.'.'.$this->getImagen()->guessExtension()
        );

        $this->setImagen(null);
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->fechaModificacion = new \DateTime();
        if (null !== $this->getImagen()) {
            $this->imagenExtension = $this->getImagen()->guessExtension();
        }
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->temp = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (isset($this->temp)) {
            unlink($this->temp);
        }
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        //return __DIR__.'/../../../../web/'.$this->getUploadDir();
        return __DIR__.'/../Resources/public/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/productos';
    }
    
    public function getAbsolutePath()
    {
        return null === $this->imagenExtension
            ? null
            : $this->getUploadRootDir().'/p'.$this->id.'.'.$this->imagenExtension;
    }
    
    public function __toString() {
        return $this->nombreImagen;
    }
    
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
}