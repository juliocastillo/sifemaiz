<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConActivoFijo
 *
 * @ORM\Table(name="con_activo_fijo", indexes={@ORM\Index(name="IDX_FA4F7CE3664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_FA4F7CE38DFCA0F1", columns={"id_activo"}), @ORM\Index(name="IDX_FA4F7CE3890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_FA4F7CE3DBDE0CDC", columns={"id_oficina"})})
 * @ORM\Entity
 */
class ConActivoFijo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="con_activo_fijo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlOficina
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlOficina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_oficina", referencedColumnName="id")
     * })
     */
    private $idOficina;

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
     * @var \Ninfac\ContaBundle\Entity\CtlActivo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlActivo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_activo", referencedColumnName="id")
     * })
     */
    private $idActivo;

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
     * Set idOficina
     *
     * @param \Ninfac\ContaBundle\Entity\CtlOficina $idOficina
     *
     * @return ConActivoFijo
     */
    public function setIdOficina(\Ninfac\ContaBundle\Entity\CtlOficina $idOficina = null)
    {
        $this->idOficina = $idOficina;

        return $this;
    }

    /**
     * Get idOficina
     *
     * @return \Ninfac\ContaBundle\Entity\CtlOficina
     */
    public function getIdOficina()
    {
        return $this->idOficina;
    }

    /**
     * Set idEmpleado
     *
     * @param \Ninfac\ContaBundle\Entity\MntEmpleado $idEmpleado
     *
     * @return ConActivoFijo
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

    /**
     * Set idActivo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlActivo $idActivo
     *
     * @return ConActivoFijo
     */
    public function setIdActivo(\Ninfac\ContaBundle\Entity\CtlActivo $idActivo = null)
    {
        $this->idActivo = $idActivo;

        return $this;
    }

    /**
     * Get idActivo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlActivo
     */
    public function getIdActivo()
    {
        return $this->idActivo;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return ConActivoFijo
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
