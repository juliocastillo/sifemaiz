<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacFacturaDetalle
 *
 * @ORM\Table(name="fac_factura_detalle", indexes={@ORM\Index(name="IDX_EC0AA727760979", columns={"id_factura"}), @ORM\Index(name="IDX_EC0AA73FA73721", columns={"id_tipoprecio"}), @ORM\Index(name="IDX_EC0AA723FA9FB2", columns={"id_bodega"}), @ORM\Index(name="IDX_EC0AA74C84185C", columns={"id_porcentaje_descuento"}), @ORM\Index(name="IDX_EC0AA7F760EA80", columns={"id_producto"})})
 * @ORM\Entity
 */
class FacFacturaDetalle
{
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
     * @var string
     *
     * @ORM\Column(name="precio_descuento", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $precioDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="varlor_descuento", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $varlorDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="gravadas", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $gravadas;

    /**
     * @var string
     *
     * @ORM\Column(name="exentas", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $exentas;

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $iva;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $costo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fac_factura_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Ninfac\ContaBundle\Entity\CtlPorcentajeDescuento
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlPorcentajeDescuento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_porcentaje_descuento", referencedColumnName="id")
     * })
     */
    private $idPorcentajeDescuento;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlBodega
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBodega")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bodega", referencedColumnName="id")
     * })
     */
    private $idBodega;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipoprecio
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipoprecio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoprecio", referencedColumnName="id")
     * })
     */
    private $idTipoprecio;

    /**
     * @var \Ninfac\ContaBundle\Entity\FacFactura
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\FacFactura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_factura", referencedColumnName="id")
     * })
     */
    private $idFactura;



    /**
     * Set cantidad
     *
     * @param string $cantidad
     *
     * @return FacFacturaDetalle
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
     * @return FacFacturaDetalle
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
     * Set precioDescuento
     *
     * @param string $precioDescuento
     *
     * @return FacFacturaDetalle
     */
    public function setPrecioDescuento($precioDescuento)
    {
        $this->precioDescuento = $precioDescuento;

        return $this;
    }

    /**
     * Get precioDescuento
     *
     * @return string
     */
    public function getPrecioDescuento()
    {
        return $this->precioDescuento;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return FacFacturaDetalle
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set varlorDescuento
     *
     * @param string $varlorDescuento
     *
     * @return FacFacturaDetalle
     */
    public function setVarlorDescuento($varlorDescuento)
    {
        $this->varlorDescuento = $varlorDescuento;

        return $this;
    }

    /**
     * Get varlorDescuento
     *
     * @return string
     */
    public function getVarlorDescuento()
    {
        return $this->varlorDescuento;
    }

    /**
     * Set gravadas
     *
     * @param string $gravadas
     *
     * @return FacFacturaDetalle
     */
    public function setGravadas($gravadas)
    {
        $this->gravadas = $gravadas;

        return $this;
    }

    /**
     * Get gravadas
     *
     * @return string
     */
    public function getGravadas()
    {
        return $this->gravadas;
    }

    /**
     * Set exentas
     *
     * @param string $exentas
     *
     * @return FacFacturaDetalle
     */
    public function setExentas($exentas)
    {
        $this->exentas = $exentas;

        return $this;
    }

    /**
     * Get exentas
     *
     * @return string
     */
    public function getExentas()
    {
        return $this->exentas;
    }

    /**
     * Set iva
     *
     * @param string $iva
     *
     * @return FacFacturaDetalle
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return FacFacturaDetalle
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set costo
     *
     * @param string $costo
     *
     * @return FacFacturaDetalle
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string
     */
    public function getCosto()
    {
        return $this->costo;
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
     * Set idProducto
     *
     * @param \Ninfac\ContaBundle\Entity\CtlProducto $idProducto
     *
     * @return FacFacturaDetalle
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
     * Set idPorcentajeDescuento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPorcentajeDescuento $idPorcentajeDescuento
     *
     * @return FacFacturaDetalle
     */
    public function setIdPorcentajeDescuento(\Ninfac\ContaBundle\Entity\CtlPorcentajeDescuento $idPorcentajeDescuento = null)
    {
        $this->idPorcentajeDescuento = $idPorcentajeDescuento;

        return $this;
    }

    /**
     * Get idPorcentajeDescuento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPorcentajeDescuento
     */
    public function getIdPorcentajeDescuento()
    {
        return $this->idPorcentajeDescuento;
    }

    /**
     * Set idBodega
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBodega $idBodega
     *
     * @return FacFacturaDetalle
     */
    public function setIdBodega(\Ninfac\ContaBundle\Entity\CtlBodega $idBodega = null)
    {
        $this->idBodega = $idBodega;

        return $this;
    }

    /**
     * Get idBodega
     *
     * @return \Ninfac\ContaBundle\Entity\CtlBodega
     */
    public function getIdBodega()
    {
        return $this->idBodega;
    }

    /**
     * Set idTipoprecio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoprecio $idTipoprecio
     *
     * @return FacFacturaDetalle
     */
    public function setIdTipoprecio(\Ninfac\ContaBundle\Entity\CtlTipoprecio $idTipoprecio = null)
    {
        $this->idTipoprecio = $idTipoprecio;

        return $this;
    }

    /**
     * Get idTipoprecio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoprecio
     */
    public function getIdTipoprecio()
    {
        return $this->idTipoprecio;
    }

    /**
     * Set idFactura
     *
     * @param \Ninfac\ContaBundle\Entity\FacFactura $idFactura
     *
     * @return FacFacturaDetalle
     */
    public function setIdFactura(\Ninfac\ContaBundle\Entity\FacFactura $idFactura = null)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return \Ninfac\ContaBundle\Entity\FacFactura
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }
}
