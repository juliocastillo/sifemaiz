<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConPartidacontableDetalle
 *
 * @ORM\Table(name="con_partidacontable_detalle", indexes={@ORM\Index(name="IDX_F85AB0AE4D0513AD", columns={"id_partidacontable"}), @ORM\Index(name="IDX_F85AB0AE664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_F85AB0AE9C3C3AA2", columns={"id_cuentacontable"})})
 * @ORM\Entity
 */
class ConPartidacontableDetalle
{
    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=4, nullable=true)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=200, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="con_partidacontable_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Ninfac\ContaBundle\Entity\ConPartidacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\ConPartidacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partidacontable", referencedColumnName="id")
     * })
     */
    private $idPartidacontable;



    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return ConPartidacontableDetalle
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCuentacontable $idCuentacontable
     *
     * @return ConPartidacontableDetalle
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
