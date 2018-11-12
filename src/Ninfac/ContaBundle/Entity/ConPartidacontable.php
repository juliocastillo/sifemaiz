<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConPartidacontable
 *
 * @ORM\Table(name="con_partidacontable", indexes={@ORM\Index(name="IDX_49C6AC6664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_49C6AC62851975", columns={"id_anio"}), @ORM\Index(name="IDX_49C6AC699F90CDE", columns={"id_tipo_partida"})})
 * @ORM\Entity(repositoryClass="Ninfac\ContaBundle\Repository\ConPartidacontableRepository")
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
     * @var \Date
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="corr_anual", type="integer", nullable=true)
     */
    private $corrAnual;

    /**
     * @var integer
     *
     * @ORM\Column(name="corr_mensual", type="integer", nullable=true)
     */
    private $corrMensual;

    /**
     * @var integer
     *
     * @ORM\Column(name="corr_tipo", type="integer", nullable=true)
     */
    private $corrTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=150, nullable=false)
     */
    private $concepto;

    /**
     * @var string
     *
     * @ORM\Column(name="total_debe", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalDebe;

    /**
     * @var string
     *
     * @ORM\Column(name="total_haber", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalHaber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="partida_inicial", type="boolean", nullable=true)
     */
    private $partidaInicial;

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
     * @var \CtlTipoPartida
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoPartida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_partida", referencedColumnName="id", nullable=false)
     * })
     */
    private $idTipoPartida;

    /**
     *
     * @ORM\OneToMany(targetEntity="ConPartidacontableDetalle", mappedBy="idPartidacontable", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $conPartidacontableDetalle;

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
     * Set partidaInicial
     *
     * @param boolean $partidaInicial
     *
     * @return ConPartidacontable
     */
    public function setPartidaInicial($partidaInicial)
    {
        $this->partidaInicial = $partidaInicial;

        return $this;
    }

    /**
     * Get partidaInicial
     *
     * @return boolean
     */
    public function getPartidaInicial()
    {
        return $this->partidaInicial;
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
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return ConPartidacontable
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
     * @return ConPartidacontable
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
     * Set idTipoPartida
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoPartida $idTipoPartida
     *
     * @return ConPartidacontable
     */
    public function setIdTipoPartida(\Ninfac\ContaBundle\Entity\CtlTipoPartida $idTipoPartida = null)
    {
        $this->idTipoPartida = $idTipoPartida;

        return $this;
    }

    /**
     * Get idTipoPartida
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoPartida
     */
    public function getIdTipoPartida()
    {
        return $this->idTipoPartida;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->conPartidacontableDetalle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add conPartidacontableDetalle
     *
     * @param \Ninfac\ContaBundle\Entity\ConPartidacontableDetalle $conPartidacontableDetalle
     *
     * @return ConPartidacontable
     */
    public function addConPartidacontableDetalle(\Ninfac\ContaBundle\Entity\ConPartidacontableDetalle $conPartidacontableDetalle)
    {
        $this->conPartidacontableDetalle[] = $conPartidacontableDetalle;

        return $this;
    }

    /**
     * Remove conPartidacontableDetalle
     *
     * @param \Ninfac\ContaBundle\Entity\ConPartidacontableDetalle $conPartidacontableDetalle
     */
    public function removeConPartidacontableDetalle(\Ninfac\ContaBundle\Entity\ConPartidacontableDetalle $conPartidacontableDetalle)
    {
        $this->conPartidacontableDetalle->removeElement($conPartidacontableDetalle);
    }

    /**
     * Get conPartidacontableDetalle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConPartidacontableDetalle()
    {
        return $this->conPartidacontableDetalle;
    }
    
    public function __toString() {
        return $this->concepto;
    }
}
