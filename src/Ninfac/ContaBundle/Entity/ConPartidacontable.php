<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConPartidacontable
 *
 * @ORM\Table(name="con_partidacontable", indexes={@ORM\Index(name="IDX_49C6AC6664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_49C6AC6DD598460", columns={"id_tipopartida"}), @ORM\Index(name="IDX_49C6AC62B2B0C0A", columns={"id_formapartida"})})
 * @ORM\Entity
 */
class ConPartidacontable
{
    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=4, nullable=false)
     */
    private $anio;

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
     * @ORM\Column(name="fecha", type="date", nullable=false)
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
     * @ORM\Column(name="user_add", type="integer", nullable=false)
     */
    private $userAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_mod", type="integer", nullable=true)
     */
    private $userMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="con_partidacontable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlFormapartida
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlFormapartida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formapartida", referencedColumnName="id")
     * })
     */
    private $idFormapartida;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipopartida
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipopartida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipopartida", referencedColumnName="id")
     * })
     */
    private $idTipopartida;

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
     * Set anio
     *
     * @param string $anio
     *
     * @return ConPartidacontable
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
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return ConPartidacontable
     */
    public function setUserAdd($userAdd)
    {
        $this->userAdd = $userAdd;

        return $this;
    }

    /**
     * Get userAdd
     *
     * @return integer
     */
    public function getUserAdd()
    {
        return $this->userAdd;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return ConPartidacontable
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set userMod
     *
     * @param integer $userMod
     *
     * @return ConPartidacontable
     */
    public function setUserMod($userMod)
    {
        $this->userMod = $userMod;

        return $this;
    }

    /**
     * Get userMod
     *
     * @return integer
     */
    public function getUserMod()
    {
        return $this->userMod;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return ConPartidacontable
     */
    public function setDateMod($dateMod)
    {
        $this->dateMod = $dateMod;

        return $this;
    }

    /**
     * Get dateMod
     *
     * @return \DateTime
     */
    public function getDateMod()
    {
        return $this->dateMod;
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
}
