<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacAbonosCxc
 *
 * @ORM\Table(name="fac_abonos_cxc", indexes={@ORM\Index(name="IDX_F1CBE45B664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_F1CBE45BB803F873", columns={"id_tipoingreso"}), @ORM\Index(name="IDX_F1CBE45BE88F3A0E", columns={"id_punto_venta"}), @ORM\Index(name="IDX_F1CBE45B2A813255", columns={"id_cliente"}), @ORM\Index(name="IDX_F1CBE45B6AC8F6D3", columns={"id_banco_cheque"}), @ORM\Index(name="IDX_F1CBE45BD57EA380", columns={"id_banco_remesa"})})
 * @ORM\Entity
 */
class FacAbonosCxc
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=10, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="monto_efectivo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montoEfectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="monto_cheque", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montoCheque;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_cheque", type="string", length=25, nullable=true)
     */
    private $numeroCheque;

    /**
     * @var string
     *
     * @ORM\Column(name="monto_remesa", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montoRemesa;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=100, nullable=true)
     */
    private $comentario;

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
     * @ORM\SequenceGenerator(sequenceName="fac_abonos_cxc_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlBanco
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBanco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_banco_cheque", referencedColumnName="id")
     * })
     */
    private $idBancoCheque;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlBanco
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBanco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_banco_remesa", referencedColumnName="id")
     * })
     */
    private $idBancoRemesa;

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
     * @var \Ninfac\ContaBundle\Entity\CtlPuntoVenta
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlPuntoVenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_punto_venta", referencedColumnName="id")
     * })
     */
    private $idPuntoVenta;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipoingreso
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipoingreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoingreso", referencedColumnName="id")
     * })
     */
    private $idTipoingreso;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return FacAbonosCxc
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
     * Set referencia
     *
     * @param string $referencia
     *
     * @return FacAbonosCxc
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set montoEfectivo
     *
     * @param string $montoEfectivo
     *
     * @return FacAbonosCxc
     */
    public function setMontoEfectivo($montoEfectivo)
    {
        $this->montoEfectivo = $montoEfectivo;

        return $this;
    }

    /**
     * Get montoEfectivo
     *
     * @return string
     */
    public function getMontoEfectivo()
    {
        return $this->montoEfectivo;
    }

    /**
     * Set montoCheque
     *
     * @param string $montoCheque
     *
     * @return FacAbonosCxc
     */
    public function setMontoCheque($montoCheque)
    {
        $this->montoCheque = $montoCheque;

        return $this;
    }

    /**
     * Get montoCheque
     *
     * @return string
     */
    public function getMontoCheque()
    {
        return $this->montoCheque;
    }

    /**
     * Set numeroCheque
     *
     * @param string $numeroCheque
     *
     * @return FacAbonosCxc
     */
    public function setNumeroCheque($numeroCheque)
    {
        $this->numeroCheque = $numeroCheque;

        return $this;
    }

    /**
     * Get numeroCheque
     *
     * @return string
     */
    public function getNumeroCheque()
    {
        return $this->numeroCheque;
    }

    /**
     * Set montoRemesa
     *
     * @param string $montoRemesa
     *
     * @return FacAbonosCxc
     */
    public function setMontoRemesa($montoRemesa)
    {
        $this->montoRemesa = $montoRemesa;

        return $this;
    }

    /**
     * Get montoRemesa
     *
     * @return string
     */
    public function getMontoRemesa()
    {
        return $this->montoRemesa;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return FacAbonosCxc
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return FacAbonosCxc
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
     * @return FacAbonosCxc
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
     * @return FacAbonosCxc
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
     * @return FacAbonosCxc
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
     * Set idBancoCheque
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBanco $idBancoCheque
     *
     * @return FacAbonosCxc
     */
    public function setIdBancoCheque(\Ninfac\ContaBundle\Entity\CtlBanco $idBancoCheque = null)
    {
        $this->idBancoCheque = $idBancoCheque;

        return $this;
    }

    /**
     * Get idBancoCheque
     *
     * @return \Ninfac\ContaBundle\Entity\CtlBanco
     */
    public function getIdBancoCheque()
    {
        return $this->idBancoCheque;
    }

    /**
     * Set idBancoRemesa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBanco $idBancoRemesa
     *
     * @return FacAbonosCxc
     */
    public function setIdBancoRemesa(\Ninfac\ContaBundle\Entity\CtlBanco $idBancoRemesa = null)
    {
        $this->idBancoRemesa = $idBancoRemesa;

        return $this;
    }

    /**
     * Get idBancoRemesa
     *
     * @return \Ninfac\ContaBundle\Entity\CtlBanco
     */
    public function getIdBancoRemesa()
    {
        return $this->idBancoRemesa;
    }

    /**
     * Set idCliente
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCliente $idCliente
     *
     * @return FacAbonosCxc
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
     * Set idPuntoVenta
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPuntoVenta $idPuntoVenta
     *
     * @return FacAbonosCxc
     */
    public function setIdPuntoVenta(\Ninfac\ContaBundle\Entity\CtlPuntoVenta $idPuntoVenta = null)
    {
        $this->idPuntoVenta = $idPuntoVenta;

        return $this;
    }

    /**
     * Get idPuntoVenta
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPuntoVenta
     */
    public function getIdPuntoVenta()
    {
        return $this->idPuntoVenta;
    }

    /**
     * Set idTipoingreso
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoingreso $idTipoingreso
     *
     * @return FacAbonosCxc
     */
    public function setIdTipoingreso(\Ninfac\ContaBundle\Entity\CtlTipoingreso $idTipoingreso = null)
    {
        $this->idTipoingreso = $idTipoingreso;

        return $this;
    }

    /**
     * Get idTipoingreso
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoingreso
     */
    public function getIdTipoingreso()
    {
        return $this->idTipoingreso;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return FacAbonosCxc
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
