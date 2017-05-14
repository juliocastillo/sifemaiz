<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacCotizacion
 *
 * @ORM\Table(name="fac_cotizacion", indexes={@ORM\Index(name="IDX_6564ADEC664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_6564ADEC2A813255", columns={"id_cliente"}), @ORM\Index(name="IDX_6564ADECF09CE00B", columns={"id_tipodocumento"}), @ORM\Index(name="IDX_6564ADEC890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class FacCotizacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=10, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_expira", type="date", nullable=true)
     */
    private $fechaExpira;

    /**
     * @var string
     *
     * @ORM\Column(name="atencion", type="string", length=50, nullable=true)
     */
    private $atencion;

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
     * @ORM\SequenceGenerator(sequenceName="fac_cotizacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipodocumento
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipodocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipodocumento", referencedColumnName="id")
     * })
     */
    private $idTipodocumento;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCliente
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     * })
     */
    private $idCliente;

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
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     *
     * @return FacCotizacion
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return FacCotizacion
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
     * Set fechaExpira
     *
     * @param \DateTime $fechaExpira
     *
     * @return FacCotizacion
     */
    public function setFechaExpira($fechaExpira)
    {
        $this->fechaExpira = $fechaExpira;

        return $this;
    }

    /**
     * Get fechaExpira
     *
     * @return \DateTime
     */
    public function getFechaExpira()
    {
        return $this->fechaExpira;
    }

    /**
     * Set atencion
     *
     * @param string $atencion
     *
     * @return FacCotizacion
     */
    public function setAtencion($atencion)
    {
        $this->atencion = $atencion;

        return $this;
    }

    /**
     * Get atencion
     *
     * @return string
     */
    public function getAtencion()
    {
        return $this->atencion;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return FacCotizacion
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
     * @return FacCotizacion
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
     * @return FacCotizacion
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
     * @return FacCotizacion
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
     * Set idEmpleado
     *
     * @param \Ninfac\ContaBundle\Entity\MntEmpleado $idEmpleado
     *
     * @return FacCotizacion
     */
    public function setIdEmpleado(\Ninfac\ContaBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Ninfac\ContaBundle\Entity\MntEmpleado
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idTipodocumento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipodocumento $idTipodocumento
     *
     * @return FacCotizacion
     */
    public function setIdTipodocumento(\Ninfac\ContaBundle\Entity\CtlTipodocumento $idTipodocumento = null)
    {
        $this->idTipodocumento = $idTipodocumento;

        return $this;
    }

    /**
     * Get idTipodocumento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipodocumento
     */
    public function getIdTipodocumento()
    {
        return $this->idTipodocumento;
    }

    /**
     * Set idCliente
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCliente $idCliente
     *
     * @return FacCotizacion
     */
    public function setIdCliente(\Ninfac\ContaBundle\Entity\CtlCliente $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return FacCotizacion
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
