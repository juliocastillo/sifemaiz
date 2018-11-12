<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvInventarioDetalle
 *
 * @ORM\Table(name="inv_inventario_detalle", indexes={@ORM\Index(name="IDX_65CFDB099C3C3AA2", columns={"id_cuentacontable"}), @ORM\Index(name="IDX_65CFDB09664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_65CFDB09CF93CE22", columns={"id_inventario"}), @ORM\Index(name="IDX_65CFDB09F760EA80", columns={"id_producto"})})
 * @ORM\Entity
 */
class InvInventarioDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inv_inventario_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_costo", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $precioCosto;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_venta", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $precioVenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \MntCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="MntCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuentacontable", referencedColumnName="id")
     * })
     */
    private $idCuentacontable;

    /**
     * @var \CtlEmpresa
     *
     * @ORM\ManyToOne(targetEntity="CtlEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \InvInventario
     *
     * @ORM\ManyToOne(targetEntity="InvInventario", inversedBy="inventarioDetalle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario", referencedColumnName="id")
     * })
     */
    private $idInventario;

    /**
     * @var \MntProducto
     *
     * @ORM\ManyToOne(targetEntity="MntProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     * })
     */
    private $idProducto;



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
     * Set cantidad
     *
     * @param string $cantidad
     *
     * @return InvInventarioDetalle
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
     * Set precioCosto
     *
     * @param string $precioCosto
     *
     * @return InvInventarioDetalle
     */
    public function setPrecioCosto($precioCosto)
    {
        $this->precioCosto = $precioCosto;

        return $this;
    }

    /**
     * Get precioCosto
     *
     * @return string
     */
    public function getPrecioCosto()
    {
        return $this->precioCosto;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return InvInventarioDetalle
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
     * Set precioVenta
     *
     * @param string $precioVenta
     *
     * @return InvInventarioDetalle
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;

        return $this;
    }

    /**
     * Get precioVenta
     *
     * @return string
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return InvInventarioDetalle
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return InvInventarioDetalle
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return InvInventarioDetalle
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return InvInventarioDetalle
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set idCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\MntCuentacontable $idCuentacontable
     *
     * @return InvInventarioDetalle
     */
    public function setIdCuentacontable(\Ninfac\ContaBundle\Entity\MntCuentacontable $idCuentacontable = null)
    {
        $this->idCuentacontable = $idCuentacontable;

        return $this;
    }

    /**
     * Get idCuentacontable
     *
     * @return \Ninfac\ContaBundle\Entity\MntCuentacontable
     */
    public function getIdCuentacontable()
    {
        return $this->idCuentacontable;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return InvInventarioDetalle
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
     * Set idInventario
     *
     * @param \Ninfac\ContaBundle\Entity\InvInventario $idInventario
     *
     * @return InvInventarioDetalle
     */
    public function setIdInventario(\Ninfac\ContaBundle\Entity\InvInventario $idInventario = null)
    {
        $this->idInventario = $idInventario;

        return $this;
    }

    /**
     * Get idInventario
     *
     * @return \Ninfac\ContaBundle\Entity\InvInventario
     */
    public function getIdInventario()
    {
        return $this->idInventario;
    }

    /**
     * Set idProducto
     *
     * @param \Ninfac\ContaBundle\Entity\MntProducto $idProducto
     *
     * @return InvInventarioDetalle
     */
    public function setIdProducto(\Ninfac\ContaBundle\Entity\MntProducto $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \Ninfac\ContaBundle\Entity\MntProducto
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }
}
