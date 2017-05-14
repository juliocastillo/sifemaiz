<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacFactura
 *
 * @ORM\Table(name="fac_factura", indexes={@ORM\Index(name="IDX_60ACA1A523FA9FB2", columns={"id_bodega"}), @ORM\Index(name="IDX_60ACA1A5890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_60ACA1A52A813255", columns={"id_cliente"}), @ORM\Index(name="IDX_60ACA1A5F09CE00B", columns={"id_tipodocumento"}), @ORM\Index(name="IDX_60ACA1A54D0513AD", columns={"id_partidacontable"}), @ORM\Index(name="IDX_60ACA1A5E12F6CD4", columns={"id_cotizacion"}), @ORM\Index(name="IDX_60ACA1A5B1476DEC", columns={"id_forma_pago"}), @ORM\Index(name="IDX_60ACA1A5E88F3A0E", columns={"id_punto_venta"})})
 * @ORM\Entity
 */
class FacFactura
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
     * @ORM\Column(name="numero_documento", type="string", length=10, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="gravadas", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $gravadas;

    /**
     * @var string
     *
     * @ORM\Column(name="exentas", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $exentas;

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $iva;

    /**
     * @var string
     *
     * @ORM\Column(name="retencion", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $retencion;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $total;

    /**
     * @var boolean
     *
     * @ORM\Column(name="afecta", type="boolean", nullable=true)
     */
    private $afecta;

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
     * @ORM\SequenceGenerator(sequenceName="fac_factura_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\FacCotizacion
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\FacCotizacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cotizacion", referencedColumnName="id")
     * })
     */
    private $idCotizacion;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlFormaPago
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlFormaPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forma_pago", referencedColumnName="id")
     * })
     */
    private $idFormaPago;

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
     * @var \Ninfac\ContaBundle\Entity\ConPartidacontable
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\ConPartidacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partidacontable", referencedColumnName="id")
     * })
     */
    private $idPartidacontable;

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
     * @var \Ninfac\ContaBundle\Entity\MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;

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
     * @var \Ninfac\ContaBundle\Entity\CtlBodega
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBodega")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bodega", referencedColumnName="id")
     * })
     */
    private $idBodega;



    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return FacFactura
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
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     *
     * @return FacFactura
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
     * Set gravadas
     *
     * @param string $gravadas
     *
     * @return FacFactura
     */
    public function setGravadas($gravadas)
    {
        $this->gravadas = $gravadas;

        return $this;
    }

    /**
     * Get gravadas
     *
     * @return string
     */
    public function getGravadas()
    {
        return $this->gravadas;
    }

    /**
     * Set exentas
     *
     * @param string $exentas
     *
     * @return FacFactura
     */
    public function setExentas($exentas)
    {
        $this->exentas = $exentas;

        return $this;
    }

    /**
     * Get exentas
     *
     * @return string
     */
    public function getExentas()
    {
        return $this->exentas;
    }

    /**
     * Set iva
     *
     * @param string $iva
     *
     * @return FacFactura
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set retencion
     *
     * @param string $retencion
     *
     * @return FacFactura
     */
    public function setRetencion($retencion)
    {
        $this->retencion = $retencion;

        return $this;
    }

    /**
     * Get retencion
     *
     * @return string
     */
    public function getRetencion()
    {
        return $this->retencion;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     *
     * @return FacFactura
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return FacFactura
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set afecta
     *
     * @param boolean $afecta
     *
     * @return FacFactura
     */
    public function setAfecta($afecta)
    {
        $this->afecta = $afecta;

        return $this;
    }

    /**
     * Get afecta
     *
     * @return boolean
     */
    public function getAfecta()
    {
        return $this->afecta;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return FacFactura
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
     * @return FacFactura
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
     * @return FacFactura
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
     * @return FacFactura
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
     * Set idCotizacion
     *
     * @param \Ninfac\ContaBundle\Entity\FacCotizacion $idCotizacion
     *
     * @return FacFactura
     */
    public function setIdCotizacion(\Ninfac\ContaBundle\Entity\FacCotizacion $idCotizacion = null)
    {
        $this->idCotizacion = $idCotizacion;

        return $this;
    }

    /**
     * Get idCotizacion
     *
     * @return \Ninfac\ContaBundle\Entity\FacCotizacion
     */
    public function getIdCotizacion()
    {
        return $this->idCotizacion;
    }

    /**
     * Set idFormaPago
     *
     * @param \Ninfac\ContaBundle\Entity\CtlFormaPago $idFormaPago
     *
     * @return FacFactura
     */
    public function setIdFormaPago(\Ninfac\ContaBundle\Entity\CtlFormaPago $idFormaPago = null)
    {
        $this->idFormaPago = $idFormaPago;

        return $this;
    }

    /**
     * Get idFormaPago
     *
     * @return \Ninfac\ContaBundle\Entity\CtlFormaPago
     */
    public function getIdFormaPago()
    {
        return $this->idFormaPago;
    }

    /**
     * Set idPuntoVenta
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPuntoVenta $idPuntoVenta
     *
     * @return FacFactura
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
     * Set idPartidacontable
     *
     * @param \Ninfac\ContaBundle\Entity\ConPartidacontable $idPartidacontable
     *
     * @return FacFactura
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

    /**
     * Set idTipodocumento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipodocumento $idTipodocumento
     *
     * @return FacFactura
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
     * Set idEmpleado
     *
     * @param \Ninfac\ContaBundle\Entity\MntEmpleado $idEmpleado
     *
     * @return FacFactura
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
     * Set idCliente
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCliente $idCliente
     *
     * @return FacFactura
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
     * Set idBodega
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBodega $idBodega
     *
     * @return FacFactura
     */
    public function setIdBodega(\Ninfac\ContaBundle\Entity\CtlBodega $idBodega = null)
    {
        $this->idBodega = $idBodega;

        return $this;
    }

    /**
     * Get idBodega
     *
     * @return \Ninfac\ContaBundle\Entity\CtlBodega
     */
    public function getIdBodega()
    {
        return $this->idBodega;
    }
}
