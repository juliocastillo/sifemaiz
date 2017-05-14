<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCuentaEmpleado
 *
 * @ORM\Table(name="mnt_cuenta_empleado", indexes={@ORM\Index(name="IDX_A7B8DB1DB0295384", columns={"ctl_empleado"}), @ORM\Index(name="IDX_A7B8DB1D664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_A7B8DB1DA7F8B81", columns={"id_cuenta_contable_anticipos"}), @ORM\Index(name="IDX_A7B8DB1DBEA1C031", columns={"id_cuenta_prestamo_interno"})})
 * @ORM\Entity
 */
class MntCuentaEmpleado
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
     * @ORM\SequenceGenerator(sequenceName="mnt_cuenta_empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuenta_prestamo_interno", referencedColumnName="id")
     * })
     */
    private $idCuentaPrestamoInterno;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuenta_contable_anticipos", referencedColumnName="id")
     * })
     */
    private $idCuentaContableAnticipos;

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
     * @var \Ninfac\ContaBundle\Entity\MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_empleado", referencedColumnName="id")
     * })
     */
    private $ctlEmpleado;



    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return MntCuentaEmpleado
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
     * Set idCuentaPrestamoInterno
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentaPrestamoInterno
     *
     * @return MntCuentaEmpleado
     */
    public function setIdCuentaPrestamoInterno(\Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentaPrestamoInterno = null)
    {
        $this->idCuentaPrestamoInterno = $idCuentaPrestamoInterno;

        return $this;
    }

    /**
     * Get idCuentaPrestamoInterno
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCuentacontable
     */
    public function getIdCuentaPrestamoInterno()
    {
        return $this->idCuentaPrestamoInterno;
    }

    /**
     * Set idCuentaContableAnticipos
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentaContableAnticipos
     *
     * @return MntCuentaEmpleado
     */
    public function setIdCuentaContableAnticipos(\Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentaContableAnticipos = null)
    {
        $this->idCuentaContableAnticipos = $idCuentaContableAnticipos;

        return $this;
    }

    /**
     * Get idCuentaContableAnticipos
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCuentacontable
     */
    public function getIdCuentaContableAnticipos()
    {
        return $this->idCuentaContableAnticipos;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return MntCuentaEmpleado
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
     * Set ctlEmpleado
     *
     * @param \Ninfac\ContaBundle\Entity\MntEmpleado $ctlEmpleado
     *
     * @return MntCuentaEmpleado
     */
    public function setCtlEmpleado(\Ninfac\ContaBundle\Entity\MntEmpleado $ctlEmpleado = null)
    {
        $this->ctlEmpleado = $ctlEmpleado;

        return $this;
    }

    /**
     * Get ctlEmpleado
     *
     * @return \Ninfac\ContaBundle\Entity\MntEmpleado
     */
    public function getCtlEmpleado()
    {
        return $this->ctlEmpleado;
    }
}
