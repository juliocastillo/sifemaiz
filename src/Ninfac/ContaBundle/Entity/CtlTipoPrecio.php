<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipoPrecio
 *
 * @ORM\Table(name="ctl_tipo_precio")
 * @ORM\Entity
 */
class CtlTipoPrecio {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipo_precio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="porcentaje_descuento", type="integer", nullable=false)
     */
    private $porcentajeDescuento;
    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlTipoPrecio
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set porcentajeDescuento
     *
     * @param integer $porcentajeDescuento
     *
     * @return MntPrecioProducto
     */
    public function setPorcentajeDescuento($porcentajeDescuento) {
        $this->porcentajeDescuento = $porcentajeDescuento;

        return $this;
    }

    /**
     * Get porcentajeDescuento
     *
     * @return integer
     */
    public function getPorcentajeDescuento() {
        return $this->porcentajeDescuento;
    }
    
    
    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return CtlTipoPrecio
     */
    public function setActivo($activo) {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo() {
        return $this->activo;
    }

    public function __toString() {
        return (string) $this->nombre . ',  ' . (string) $this->porcentajeDescuento .' % Descuento';
    }

}
