<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCuentacontable
 *
 * @ORM\Table(name="mnt_cuentacontable", uniqueConstraints={@ORM\UniqueConstraint(name="uk_cuentacontable", columns={"id_empresa", "id_anio", "cuenta"})}, indexes={@ORM\Index(name="IDX_E01D413C2851975", columns={"id_anio"}), @ORM\Index(name="IDX_E01D413CC6FBE596", columns={"id_cuentacontable_depende"}), @ORM\Index(name="IDX_E01D413C664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_E01D413CF4DAC27E", columns={"id_nivel_cuentacontable"}), @ORM\Index(name="IDX_E01D413C6B63D4CF", columns={"id_tipo_cuentacontable"})})
 * @ORM\Entity
 */
class MntCuentacontable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_cuentacontable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cuenta", type="string", length=20, nullable=false)
     */
    private $cuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

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
     *   @ORM\JoinColumn(name="id_cuentacontable_depende", referencedColumnName="id")
     * })
     */
    private $idCuentacontableDepende;

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
     * @var \CtlNivelCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="CtlNivelCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nivel_cuentacontable", referencedColumnName="id")
     * })
     */
    private $idNivelCuentacontable;

    /**
     * @var \CtlTipoCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_cuentacontable", referencedColumnName="id")
     * })
     */
    private $idTipoCuentacontable;



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
     * Set cuenta
     *
     * @param string $cuenta
     *
     * @return MntCuentacontable
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return MntCuentacontable
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return MntCuentacontable
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
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return MntCuentacontable
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return MntCuentacontable
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return MntCuentacontable
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return MntCuentacontable
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set idAnio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlAnio $idAnio
     *
     * @return MntCuentacontable
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
     * Set idCuentacontableDepende
     *
     * @param \Ninfac\ContaBundle\Entity\MntCuentacontable $idCuentacontableDepende
     *
     * @return MntCuentacontable
     */
    public function setIdCuentacontableDepende(\Ninfac\ContaBundle\Entity\MntCuentacontable $idCuentacontableDepende = null)
    {
        $this->idCuentacontableDepende = $idCuentacontableDepende;

        return $this;
    }

    /**
     * Get idCuentacontableDepende
     *
     * @return \Ninfac\ContaBundle\Entity\MntCuentacontable
     */
    public function getIdCuentacontableDepende()
    {
        return $this->idCuentacontableDepende;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return MntCuentacontable
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
     * Set idNivelCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlNivelCuentacontable $idNivelCuentacontable
     *
     * @return MntCuentacontable
     */
    public function setIdNivelCuentacontable(\Ninfac\ContaBundle\Entity\CtlNivelCuentacontable $idNivelCuentacontable = null)
    {
        $this->idNivelCuentacontable = $idNivelCuentacontable;

        return $this;
    }

    /**
     * Get idNivelCuentacontable
     *
     * @return \Ninfac\ContaBundle\Entity\CtlNivelCuentacontable
     */
    public function getIdNivelCuentacontable()
    {
        return $this->idNivelCuentacontable;
    }

    /**
     * Set idTipoCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoCuentacontable $idTipoCuentacontable
     *
     * @return MntCuentacontable
     */
    public function setIdTipoCuentacontable(\Ninfac\ContaBundle\Entity\CtlTipoCuentacontable $idTipoCuentacontable = null)
    {
        $this->idTipoCuentacontable = $idTipoCuentacontable;

        return $this;
    }

    /**
     * Get idTipoCuentacontable
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoCuentacontable
     */
    public function getIdTipoCuentacontable()
    {
        return $this->idTipoCuentacontable;
    }
    
    public function __toString() {
        return (string)$this->cuenta.' '.$this->nombre;
    }
}
