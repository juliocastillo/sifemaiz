<?php

namespace Ninfac\ContaBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPeriodocontable
 *
 * @ORM\Table(name="ctl_periodocontable", uniqueConstraints={@ORM\UniqueConstraint(name="uk_periodocontable", columns={"id_anio", "id_empresa", "id_mes"})}, indexes={@ORM\Index(name="IDX_A8B8A7AF2851975", columns={"id_anio"}), @ORM\Index(name="IDX_A8B8A7AFF06CD65F", columns={"id_mes"}), @ORM\Index(name="IDX_A8B8A7AF664AF320", columns={"id_empresa"})})
 * @ORM\Entity
 * @UniqueEntity(
 *      fields={"idMes", "idAnio", "idEmpresa"},
 *      message="Ya existe este periodo en la empresa seleccionada."
 * )
 */
class CtlPeriodocontable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_periodocontable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

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
     * @var \CtlMes
     *
     * @ORM\ManyToOne(targetEntity="CtlMes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mes", referencedColumnName="id")
     * })
     */
    private $idMes;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return CtlPeriodocontable
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idAnio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlAnio $idAnio
     *
     * @return CtlPeriodocontable
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
     * Set idMes
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMes $idMes
     *
     * @return CtlPeriodocontable
     */
    public function setIdMes(\Ninfac\ContaBundle\Entity\CtlMes $idMes = null)
    {
        $this->idMes = $idMes;

        return $this;
    }

    /**
     * Get idMes
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMes
     */
    public function getIdMes()
    {
        return $this->idMes;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return CtlPeriodocontable
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
