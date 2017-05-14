<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvInventarioDetalle
 *
 * @ORM\Table(name="inv_inventario_detalle", indexes={@ORM\Index(name="IDX_65CFDB09CF93CE22", columns={"id_inventario"}), @ORM\Index(name="IDX_65CFDB09664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_65CFDB099C3C3AA2", columns={"id_cuentacontable"}), @ORM\Index(name="IDX_65CFDB09F760EA80", columns={"id_producto"})})
 * @ORM\Entity
 */
class InvInventarioDetalle
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
     * @ORM\Column(name="costo", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $costo;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inv_inventario_detalle_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Ninfac\ContaBundle\Entity\CtlCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuentacontable", referencedColumnName="id")
     * })
     */
    private $idCuentacontable;

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
     * @var \Ninfac\ContaBundle\Entity\InvInventario
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\InvInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario", referencedColumnName="id")
     * })
     */
    private $idInventario;



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
     * Set costo
     *
     * @param string $costo
     *
     * @return InvInventarioDetalle
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
     * @return InvInventarioDetalle
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
     * Set idCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontable
     *
     * @return InvInventarioDetalle
     */
    public function setIdCuentacontable(\Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontable = null)
    {
        $this->idCuentacontable = $idCuentacontable;

        return $this;
    }

    /**
     * Get idCuentacontable
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCuentacontable
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
}
