<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntEmpleadoReferenciaLaboral
 *
 * @ORM\Table(name="mnt_empleado_referencia_laboral", indexes={@ORM\Index(name="IDX_ABB88983890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class MntEmpleadoReferenciaLaboral
{
    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=50, nullable=false)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=50, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="jefe", type="string", length=50, nullable=true)
     */
    private $jefe;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempo_trabajo", type="string", length=50, nullable=true)
     */
    private $tiempoTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo_retiro", type="string", length=50, nullable=true)
     */
    private $motivoRetiro;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_empleado_referencia_laboral_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;



    /**
     * Set empresa
     *
     * @param string $empresa
     *
     * @return MntEmpleadoReferenciaLaboral
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return MntEmpleadoReferenciaLaboral
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set jefe
     *
     * @param string $jefe
     *
     * @return MntEmpleadoReferenciaLaboral
     */
    public function setJefe($jefe)
    {
        $this->jefe = $jefe;

        return $this;
    }

    /**
     * Get jefe
     *
     * @return string
     */
    public function getJefe()
    {
        return $this->jefe;
    }

    /**
     * Set tiempoTrabajo
     *
     * @param string $tiempoTrabajo
     *
     * @return MntEmpleadoReferenciaLaboral
     */
    public function setTiempoTrabajo($tiempoTrabajo)
    {
        $this->tiempoTrabajo = $tiempoTrabajo;

        return $this;
    }

    /**
     * Get tiempoTrabajo
     *
     * @return string
     */
    public function getTiempoTrabajo()
    {
        return $this->tiempoTrabajo;
    }

    /**
     * Set motivoRetiro
     *
     * @param string $motivoRetiro
     *
     * @return MntEmpleadoReferenciaLaboral
     */
    public function setMotivoRetiro($motivoRetiro)
    {
        $this->motivoRetiro = $motivoRetiro;

        return $this;
    }

    /**
     * Get motivoRetiro
     *
     * @return string
     */
    public function getMotivoRetiro()
    {
        return $this->motivoRetiro;
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
     * Set idEmpleado
     *
     * @param \Ninfac\ContaBundle\Entity\MntEmpleado $idEmpleado
     *
     * @return MntEmpleadoReferenciaLaboral
     */
    public function setIdEmpleado(\Ninfac\ContaBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Ninfac\ContaBundle\Entity\MntEmpleado
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
}
