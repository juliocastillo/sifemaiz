<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConPartidacontableDetalle
 *
 * @ORM\Table(name="con_partidacontable_detalle", indexes={@ORM\Index(name="IDX_F85AB0AE2851975", columns={"id_anio"}), @ORM\Index(name="IDX_F85AB0AE9C3C3AA2", columns={"id_cuentacontable"}), @ORM\Index(name="IDX_F85AB0AE664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_F85AB0AE4D0513AD", columns={"id_partidacontable"})})
 * @ORM\Entity
 */
class ConPartidacontableDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="con_partidacontable_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=200, nullable=false)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="debe", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $debe;

    /**
     * @var string
     *
     * @ORM\Column(name="haber", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $haber;

    /**
     * @var \CtlAnio
     *
     * @ORM\ManyToOne(targetEntity="CtlAnio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_anio", referencedColumnName="id")
     * })
     */
    private $idAnio;

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
     * @var \ConPartidacontable
     *
     * @ORM\ManyToOne(targetEntity="ConPartidacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partidacontable", referencedColumnName="id")
     * })
     */
    private $idPartidacontable;



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
     * Set detalle
     *
     * @param string $detalle
     *
     * @return ConPartidacontableDetalle
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set debe
     *
     * @param string $debe
     *
     * @return ConPartidacontableDetalle
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return string
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param string $haber
     *
     * @return ConPartidacontableDetalle
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return string
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Set idAnio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlAnio $idAnio
     *
     * @return ConPartidacontableDetalle
     */
    public function setIdAnio(\Ninfac\ContaBundle\Entity\CtlAnio $idAnio = null)
    {
        $this->idAnio = $idAnio;

        return $this;
    }

    /**
     * Get idAnio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlAnio
     */
    public function getIdAnio()
    {
        return $this->idAnio;
    }

    /**
     * Set idCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\MntCuentacontable $idCuentacontable
     *
     * @return ConPartidacontableDetalle
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
     * @return ConPartidacontableDetalle
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
     * Set idPartidacontable
     *
     * @param \Ninfac\ContaBundle\Entity\ConPartidacontable $idPartidacontable
     *
     * @return ConPartidacontableDetalle
     */
    public function setIdPartidacontable(\Ninfac\ContaBundle\Entity\ConPartidacontable $idPartidacontable = null)
    {
        $this->idPartidacontable = $idPartidacontable;

        return $this;
    }

    /**
     * Get idPartidacontable
     *
     * @return \Ninfac\ContaBundle\Entity\ConPartidacontable
     */
    public function getIdPartidacontable()
    {
        return $this->idPartidacontable;
    }
}
