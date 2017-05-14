<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCuentacontableCuentaplanilla
 *
 * @ORM\Table(name="mnt_cuentacontable_cuentaplanilla", indexes={@ORM\Index(name="IDX_43E4D18A9C3C3AA2", columns={"id_cuentacontable"}), @ORM\Index(name="IDX_43E4D18ADBDE0CDC", columns={"id_oficina"}), @ORM\Index(name="IDX_43E4D18A664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_43E4D18A4CA1EAFD", columns={"id_cuentaplanilla"}), @ORM\Index(name="IDX_43E4D18A5D06F624", columns={"id_tipocuentaplanilla"})})
 * @ORM\Entity
 */
class MntCuentacontableCuentaplanilla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_cuentacontable_cuentaplanilla_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipocuentaplanilla
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipocuentaplanilla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocuentaplanilla", referencedColumnName="id")
     * })
     */
    private $idTipocuentaplanilla;

    /**
     * @var \Ninfac\ContaBundle\Entity\MntCuentaplanilla
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntCuentaplanilla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuentaplanilla", referencedColumnName="id")
     * })
     */
    private $idCuentaplanilla;

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
     * @var \Ninfac\ContaBundle\Entity\CtlOficina
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlOficina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_oficina", referencedColumnName="id")
     * })
     */
    private $idOficina;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTipocuentaplanilla
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipocuentaplanilla $idTipocuentaplanilla
     *
     * @return MntCuentacontableCuentaplanilla
     */
    public function setIdTipocuentaplanilla(\Ninfac\ContaBundle\Entity\CtlTipocuentaplanilla $idTipocuentaplanilla = null)
    {
        $this->idTipocuentaplanilla = $idTipocuentaplanilla;

        return $this;
    }

    /**
     * Get idTipocuentaplanilla
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipocuentaplanilla
     */
    public function getIdTipocuentaplanilla()
    {
        return $this->idTipocuentaplanilla;
    }

    /**
     * Set idCuentaplanilla
     *
     * @param \Ninfac\ContaBundle\Entity\MntCuentaplanilla $idCuentaplanilla
     *
     * @return MntCuentacontableCuentaplanilla
     */
    public function setIdCuentaplanilla(\Ninfac\ContaBundle\Entity\MntCuentaplanilla $idCuentaplanilla = null)
    {
        $this->idCuentaplanilla = $idCuentaplanilla;

        return $this;
    }

    /**
     * Get idCuentaplanilla
     *
     * @return \Ninfac\ContaBundle\Entity\MntCuentaplanilla
     */
    public function getIdCuentaplanilla()
    {
        return $this->idCuentaplanilla;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return MntCuentacontableCuentaplanilla
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
     * Set idOficina
     *
     * @param \Ninfac\ContaBundle\Entity\CtlOficina $idOficina
     *
     * @return MntCuentacontableCuentaplanilla
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
     * Set idCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontable
     *
     * @return MntCuentacontableCuentaplanilla
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
}
