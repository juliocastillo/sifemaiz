<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConPartidacontable
 *
 * @ORM\Table(name="con_partidacontable", indexes={@ORM\Index(name="IDX_49C6AC6DD598460", columns={"id_tipopartida"}), @ORM\Index(name="IDX_49C6AC62B2B0C0A", columns={"id_formapartida"}), @ORM\Index(name="IDX_49C6AC6664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_49C6AC62851975", columns={"id_anio"}), @ORM\Index(name="IDX_49C6AC6E6696175", columns={"id_periodocontable"})})
 * @ORM\Entity
 */
class ConPartidacontable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="con_partidacontable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="corr_anual", type="integer", nullable=false)
     */
    private $corrAnual;

    /**
     * @var integer
     *
     * @ORM\Column(name="corr_mensual", type="integer", nullable=false)
     */
    private $corrMensual;

    /**
     * @var integer
     *
     * @ORM\Column(name="corr_tipo", type="integer", nullable=false)
     */
    private $corrTipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=150, nullable=false)
     */
    private $concepto;

    /**
     * @var string
     *
     * @ORM\Column(name="total_debe", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $totalDebe;

    /**
     * @var string
     *
     * @ORM\Column(name="total_haber", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $totalHaber;

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
     * @var \CtlTipopartida
     *
     * @ORM\ManyToOne(targetEntity="CtlTipopartida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipopartida", referencedColumnName="id")
     * })
     */
    private $idTipopartida;

    /**
     * @var \CtlFormapartida
     *
     * @ORM\ManyToOne(targetEntity="CtlFormapartida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formapartida", referencedColumnName="id")
     * })
     */
    private $idFormapartida;

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
     * @var \CtlAnio
     *
     * @ORM\ManyToOne(targetEntity="CtlAnio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_anio", referencedColumnName="id")
     * })
     */
    private $idAnio;

    /**
     * @var \CtlPeriodocontable
     *
     * @ORM\ManyToOne(targetEntity="CtlPeriodocontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_periodocontable", referencedColumnName="id")
     * })
     */
    private $idPeriodocontable;



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
     * Set numero
     *
     * @param integer $numero
     *
     * @return ConPartidacontable
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set corrAnual
     *
     * @param integer $corrAnual
     *
     * @return ConPartidacontable
     */
    public function setCorrAnual($corrAnual)
    {
        $this->corrAnual = $corrAnual;

        return $this;
    }

    /**
     * Get corrAnual
     *
     * @return integer
     */
    public function getCorrAnual()
    {
        return $this->corrAnual;
    }

    /**
     * Set corrMensual
     *
     * @param integer $corrMensual
     *
     * @return ConPartidacontable
     */
    public function setCorrMensual($corrMensual)
    {
        $this->corrMensual = $corrMensual;

        return $this;
    }

    /**
     * Get corrMensual
     *
     * @return integer
     */
    public function getCorrMensual()
    {
        return $this->corrMensual;
    }

    /**
     * Set corrTipo
     *
     * @param integer $corrTipo
     *
     * @return ConPartidacontable
     */
    public function setCorrTipo($corrTipo)
    {
        $this->corrTipo = $corrTipo;

        return $this;
    }

    /**
     * Get corrTipo
     *
     * @return integer
     */
    public function getCorrTipo()
    {
        return $this->corrTipo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return ConPartidacontable
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     *
     * @return ConPartidacontable
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set totalDebe
     *
     * @param string $totalDebe
     *
     * @return ConPartidacontable
     */
    public function setTotalDebe($totalDebe)
    {
        $this->totalDebe = $totalDebe;

        return $this;
    }

    /**
     * Get totalDebe
     *
     * @return string
     */
    public function getTotalDebe()
    {
        return $this->totalDebe;
    }

    /**
     * Set totalHaber
     *
     * @param string $totalHaber
     *
     * @return ConPartidacontable
     */
    public function setTotalHaber($totalHaber)
    {
        $this->totalHaber = $totalHaber;

        return $this;
    }

    /**
     * Get totalHaber
     *
     * @return string
     */
    public function getTotalHaber()
    {
        return $this->totalHaber;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return ConPartidacontable
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
     * @return ConPartidacontable
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
     * @return ConPartidacontable
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
     * @return ConPartidacontable
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
     * @return ConPartidacontable
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
     * Set idTipopartida
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipopartida $idTipopartida
     *
     * @return ConPartidacontable
     */
    public function setIdTipopartida(\Ninfac\ContaBundle\Entity\CtlTipopartida $idTipopartida = null)
    {
        $this->idTipopartida = $idTipopartida;

        return $this;
    }

    /**
     * Get idTipopartida
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipopartida
     */
    public function getIdTipopartida()
    {
        return $this->idTipopartida;
    }

    /**
     * Set idFormapartida
     *
     * @param \Ninfac\ContaBundle\Entity\CtlFormapartida $idFormapartida
     *
     * @return ConPartidacontable
     */
    public function setIdFormapartida(\Ninfac\ContaBundle\Entity\CtlFormapartida $idFormapartida = null)
    {
        $this->idFormapartida = $idFormapartida;

        return $this;
    }

    /**
     * Get idFormapartida
     *
     * @return \Ninfac\ContaBundle\Entity\CtlFormapartida
     */
    public function getIdFormapartida()
    {
        return $this->idFormapartida;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return ConPartidacontable
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
     * Set idAnio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlAnio $idAnio
     *
     * @return ConPartidacontable
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
     * Set idPeriodocontable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPeriodocontable $idPeriodocontable
     *
     * @return ConPartidacontable
     */
    public function setIdPeriodocontable(\Ninfac\ContaBundle\Entity\CtlPeriodocontable $idPeriodocontable = null)
    {
        $this->idPeriodocontable = $idPeriodocontable;

        return $this;
    }

    /**
     * Get idPeriodocontable
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPeriodocontable
     */
    public function getIdPeriodocontable()
    {
        return $this->idPeriodocontable;
    }
}
