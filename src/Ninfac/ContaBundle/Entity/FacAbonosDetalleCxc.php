<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacAbonosDetalleCxc
 *
 * @ORM\Table(name="fac_abonos_detalle_cxc", indexes={@ORM\Index(name="IDX_33210D3D75802563", columns={"id_abonos_cxc"}), @ORM\Index(name="IDX_33210D3D664AF320", columns={"id_empresa"})})
 * @ORM\Entity
 */
class FacAbonosDetalleCxc
{
    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Column", type="integer", nullable=true)
     */
    private $column;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fac_abonos_detalle_cxc_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Ninfac\ContaBundle\Entity\FacAbonosCxc
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\FacAbonosCxc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_abonos_cxc", referencedColumnName="id")
     * })
     */
    private $idAbonosCxc;



    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return FacAbonosDetalleCxc
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     *
     * @return FacAbonosDetalleCxc
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set column
     *
     * @param integer $column
     *
     * @return FacAbonosDetalleCxc
     */
    public function setColumn($column)
    {
        $this->column = $column;

        return $this;
    }

    /**
     * Get column
     *
     * @return integer
     */
    public function getColumn()
    {
        return $this->column;
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
     * @return FacAbonosDetalleCxc
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
     * Set idAbonosCxc
     *
     * @param \Ninfac\ContaBundle\Entity\FacAbonosCxc $idAbonosCxc
     *
     * @return FacAbonosDetalleCxc
     */
    public function setIdAbonosCxc(\Ninfac\ContaBundle\Entity\FacAbonosCxc $idAbonosCxc = null)
    {
        $this->idAbonosCxc = $idAbonosCxc;

        return $this;
    }

    /**
     * Get idAbonosCxc
     *
     * @return \Ninfac\ContaBundle\Entity\FacAbonosCxc
     */
    public function getIdAbonosCxc()
    {
        return $this->idAbonosCxc;
    }
}
