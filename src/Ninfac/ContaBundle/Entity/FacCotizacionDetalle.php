<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacCotizacionDetalle
 *
 * @ORM\Table(name="fac_cotizacion_detalle", indexes={@ORM\Index(name="IDX_C4C5AABCE12F6CD4", columns={"id_cotizacion"}), @ORM\Index(name="IDX_C4C5AABCF760EA80", columns={"id_producto"}), @ORM\Index(name="IDX_C4C5AABC664AF320", columns={"id_empresa"})})
 * @ORM\Entity
 */
class FacCotizacionDetalle
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $precio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fac_cotizacion_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlEmpresa
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlProducto
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     * })
     */
    private $idProducto;

    /**
     * @var \Ninfac\ContaBundle\Entity\FacCotizacion
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\FacCotizacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cotizacion", referencedColumnName="id")
     * })
     */
    private $idCotizacion;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return FacCotizacionDetalle
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     *
     * @return FacCotizacionDetalle
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return FacCotizacionDetalle
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
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
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return FacCotizacionDetalle
     */
    public function setIdEmpresa(\Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \Ninfac\ContaBundle\Entity\CtlEmpresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idProducto
     *
     * @param \Ninfac\ContaBundle\Entity\CtlProducto $idProducto
     *
     * @return FacCotizacionDetalle
     */
    public function setIdProducto(\Ninfac\ContaBundle\Entity\CtlProducto $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \Ninfac\ContaBundle\Entity\CtlProducto
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set idCotizacion
     *
     * @param \Ninfac\ContaBundle\Entity\FacCotizacion $idCotizacion
     *
     * @return FacCotizacionDetalle
     */
    public function setIdCotizacion(\Ninfac\ContaBundle\Entity\FacCotizacion $idCotizacion = null)
    {
        $this->idCotizacion = $idCotizacion;

        return $this;
    }

    /**
     * Get idCotizacion
     *
     * @return \Ninfac\ContaBundle\Entity\FacCotizacion
     */
    public function getIdCotizacion()
    {
        return $this->idCotizacion;
    }
}
