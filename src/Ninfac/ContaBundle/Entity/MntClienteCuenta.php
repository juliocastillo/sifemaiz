<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntClienteCuenta
 *
 * @ORM\Table(name="mnt_cliente_cuenta", indexes={@ORM\Index(name="IDX_CF83951C2DE7A93B", columns={"id_cuenta_contable"}), @ORM\Index(name="IDX_CF83951C2A813255", columns={"id_cliente"}), @ORM\Index(name="IDX_CF83951C664AF320", columns={"id_empresa"})})
 * @ORM\Entity
 */
class MntClienteCuenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=4, nullable=false)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_cliente_cuenta_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Ninfac\ContaBundle\Entity\CtlCliente
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     * })
     */
    private $idCliente;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuenta_contable", referencedColumnName="id")
     * })
     */
    private $idCuentaContable;



    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return MntClienteCuenta
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
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
     * @return MntClienteCuenta
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
     * Set idCliente
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCliente $idCliente
     *
     * @return MntClienteCuenta
     */
    public function setIdCliente(\Ninfac\ContaBundle\Entity\CtlCliente $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idCuentaContable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentaContable
     *
     * @return MntClienteCuenta
     */
    public function setIdCuentaContable(\Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentaContable = null)
    {
        $this->idCuentaContable = $idCuentaContable;

        return $this;
    }

    /**
     * Get idCuentaContable
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCuentacontable
     */
    public function getIdCuentaContable()
    {
        return $this->idCuentaContable;
    }
}
