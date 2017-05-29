<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCuentacontable
 *
 * @ORM\Table(name="mnt_cuentacontable", indexes={@ORM\Index(name="IDX_E01D413C2851975", columns={"id_anio"}), @ORM\Index(name="IDX_E01D413C664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_E01D413CD2F96457", columns={"id_tipocuenta_contable"}), @ORM\Index(name="IDX_E01D413C18C9494C", columns={"id_tipocuenta"})})
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
     * @var string
     *
     * @ORM\Column(name="depende", type="string", length=20, nullable=true)
     */
    private $depende;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=true)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveld", type="integer", nullable=true)
     */
    private $niveld;

    /**
     * @var integer
     *
     * @ORM\Column(name="cargar", type="integer", nullable=true)
     */
    private $cargar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="subcuenta", type="boolean", nullable=true)
     */
    private $subcuenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
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
     * @ORM\Column(name="modified_by", type="integer", nullable=true)
     */
    private $modifiedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime", nullable=true)
     */
    private $modifiedAt;

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
     * @var \CtlEmpresa
     *
     * @ORM\ManyToOne(targetEntity="CtlEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \CtlTipocuentaContable
     *
     * @ORM\ManyToOne(targetEntity="CtlTipocuentaContable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocuenta_contable", referencedColumnName="id")
     * })
     */
    private $idTipocuentaContable;

    /**
     * @var \CtlTipocuenta
     *
     * @ORM\ManyToOne(targetEntity="CtlTipocuenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocuenta", referencedColumnName="id")
     * })
     */
    private $idTipocuenta;



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
     * Set depende
     *
     * @param string $depende
     *
     * @return MntCuentacontable
     */
    public function setDepende($depende)
    {
        $this->depende = $depende;

        return $this;
    }

    /**
     * Get depende
     *
     * @return string
     */
    public function getDepende()
    {
        return $this->depende;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return MntCuentacontable
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set niveld
     *
     * @param integer $niveld
     *
     * @return MntCuentacontable
     */
    public function setNiveld($niveld)
    {
        $this->niveld = $niveld;

        return $this;
    }

    /**
     * Get niveld
     *
     * @return integer
     */
    public function getNiveld()
    {
        return $this->niveld;
    }

    /**
     * Set cargar
     *
     * @param integer $cargar
     *
     * @return MntCuentacontable
     */
    public function setCargar($cargar)
    {
        $this->cargar = $cargar;

        return $this;
    }

    /**
     * Get cargar
     *
     * @return integer
     */
    public function getCargar()
    {
        return $this->cargar;
    }

    /**
     * Set subcuenta
     *
     * @param boolean $subcuenta
     *
     * @return MntCuentacontable
     */
    public function setSubcuenta($subcuenta)
    {
        $this->subcuenta = $subcuenta;

        return $this;
    }

    /**
     * Get subcuenta
     *
     * @return boolean
     */
    public function getSubcuenta()
    {
        return $this->subcuenta;
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
     * Set modifiedBy
     *
     * @param integer $modifiedBy
     *
     * @return MntCuentacontable
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return integer
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     *
     * @return MntCuentacontable
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
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
     * Set idTipocuentaContable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipocuentaContable $idTipocuentaContable
     *
     * @return MntCuentacontable
     */
    public function setIdTipocuentaContable(\Ninfac\ContaBundle\Entity\CtlTipocuentaContable $idTipocuentaContable = null)
    {
        $this->idTipocuentaContable = $idTipocuentaContable;

        return $this;
    }

    /**
     * Get idTipocuentaContable
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipocuentaContable
     */
    public function getIdTipocuentaContable()
    {
        return $this->idTipocuentaContable;
    }

    /**
     * Set idTipocuenta
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipocuenta $idTipocuenta
     *
     * @return MntCuentacontable
     */
    public function setIdTipocuenta(\Ninfac\ContaBundle\Entity\CtlTipocuenta $idTipocuenta = null)
    {
        $this->idTipocuenta = $idTipocuenta;

        return $this;
    }

    /**
     * Get idTipocuenta
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipocuenta
     */
    public function getIdTipocuenta()
    {
        return $this->idTipocuenta;
    }
}
