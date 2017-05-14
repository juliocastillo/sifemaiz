<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntProveedorEmpresa
 *
 * @ORM\Table(name="mnt_proveedor_empresa", indexes={@ORM\Index(name="IDX_63BADDCE664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_63BADDCEB7E40309", columns={"id_cuentacontable_proveedor"}), @ORM\Index(name="IDX_63BADDCE1EDB5238", columns={"id_cuentacontable_gastos"}), @ORM\Index(name="IDX_63BADDCE9E5D6506", columns={"id_proveedores"})})
 * @ORM\Entity
 */
class MntProveedorEmpresa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_proveedor_empresa_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\MntProveedor
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntProveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proveedores", referencedColumnName="id")
     * })
     */
    private $idProveedores;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuentacontable_gastos", referencedColumnName="id")
     * })
     */
    private $idCuentacontableGastos;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuentacontable_proveedor", referencedColumnName="id")
     * })
     */
    private $idCuentacontableProveedor;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idProveedores
     *
     * @param \Ninfac\ContaBundle\Entity\MntProveedor $idProveedores
     *
     * @return MntProveedorEmpresa
     */
    public function setIdProveedores(\Ninfac\ContaBundle\Entity\MntProveedor $idProveedores = null)
    {
        $this->idProveedores = $idProveedores;

        return $this;
    }

    /**
     * Get idProveedores
     *
     * @return \Ninfac\ContaBundle\Entity\MntProveedor
     */
    public function getIdProveedores()
    {
        return $this->idProveedores;
    }

    /**
     * Set idCuentacontableGastos
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontableGastos
     *
     * @return MntProveedorEmpresa
     */
    public function setIdCuentacontableGastos(\Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontableGastos = null)
    {
        $this->idCuentacontableGastos = $idCuentacontableGastos;

        return $this;
    }

    /**
     * Get idCuentacontableGastos
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCuentacontable
     */
    public function getIdCuentacontableGastos()
    {
        return $this->idCuentacontableGastos;
    }

    /**
     * Set idCuentacontableProveedor
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontableProveedor
     *
     * @return MntProveedorEmpresa
     */
    public function setIdCuentacontableProveedor(\Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontableProveedor = null)
    {
        $this->idCuentacontableProveedor = $idCuentacontableProveedor;

        return $this;
    }

    /**
     * Get idCuentacontableProveedor
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCuentacontable
     */
    public function getIdCuentacontableProveedor()
    {
        return $this->idCuentacontableProveedor;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return MntProveedorEmpresa
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
}
