<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvInventario
 *
 * @ORM\Table(name="inv_inventario", indexes={@ORM\Index(name="IDX_AE87F435664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_AE87F43560AE4CA2", columns={"id_bodega_origen"}), @ORM\Index(name="IDX_AE87F4354A851723", columns={"id_bodega_destino"}), @ORM\Index(name="IDX_AE87F4355A6BB32F", columns={"id_tipomovimiento"}), @ORM\Index(name="IDX_AE87F435C0674963", columns={"id_motivo_movimiento"}), @ORM\Index(name="IDX_AE87F435CE5B91D8", columns={"id_tipodocumento_inventario"}), @ORM\Index(name="IDX_AE87F43596F5D4E9", columns={"id_proveedor"}), @ORM\Index(name="IDX_AE87F4357C1986A7", columns={"id_inventario_traslado"})})
 * @ORM\Entity
 */
class InvInventario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_movimiento", type="date", nullable=true)
     */
    private $fechaMovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=10, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255, nullable=true)
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
     * @ORM\SequenceGenerator(sequenceName="inv_inventario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipodocumentoInventario
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipodocumentoInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipodocumento_inventario", referencedColumnName="id")
     * })
     */
    private $idTipodocumentoInventario;

    /**
     * @var \Ninfac\ContaBundle\Entity\MntProveedor
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntProveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proveedor", referencedColumnName="id")
     * })
     */
    private $idProveedor;

    /**
     * @var \Ninfac\ContaBundle\Entity\InvInventario
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\InvInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario_traslado", referencedColumnName="id")
     * })
     */
    private $idInventarioTraslado;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlMotivoMovimiento
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlMotivoMovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_motivo_movimiento", referencedColumnName="id")
     * })
     */
    private $idMotivoMovimiento;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipomovimiento
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipomovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipomovimiento", referencedColumnName="id")
     * })
     */
    private $idTipomovimiento;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlBodega
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBodega")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bodega_origen", referencedColumnName="id")
     * })
     */
    private $idBodegaOrigen;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlBodega
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBodega")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bodega_destino", referencedColumnName="id")
     * })
     */
    private $idBodegaDestino;

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
     * Set fechaMovimiento
     *
     * @param \DateTime $fechaMovimiento
     *
     * @return InvInventario
     */
    public function setFechaMovimiento($fechaMovimiento)
    {
        $this->fechaMovimiento = $fechaMovimiento;

        return $this;
    }

    /**
     * Get fechaMovimiento
     *
     * @return \DateTime
     */
    public function getFechaMovimiento()
    {
        return $this->fechaMovimiento;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     *
     * @return InvInventario
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
     * Set comentario
     *
     * @param string $comentario
     *
     * @return InvInventario
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
     * @return InvInventario
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
     * @return InvInventario
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
     * @return InvInventario
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
     * @return InvInventario
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
     * Set idTipodocumentoInventario
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipodocumentoInventario $idTipodocumentoInventario
     *
     * @return InvInventario
     */
    public function setIdTipodocumentoInventario(\Ninfac\ContaBundle\Entity\CtlTipodocumentoInventario $idTipodocumentoInventario = null)
    {
        $this->idTipodocumentoInventario = $idTipodocumentoInventario;

        return $this;
    }

    /**
     * Get idTipodocumentoInventario
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipodocumentoInventario
     */
    public function getIdTipodocumentoInventario()
    {
        return $this->idTipodocumentoInventario;
    }

    /**
     * Set idProveedor
     *
     * @param \Ninfac\ContaBundle\Entity\MntProveedor $idProveedor
     *
     * @return InvInventario
     */
    public function setIdProveedor(\Ninfac\ContaBundle\Entity\MntProveedor $idProveedor = null)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return \Ninfac\ContaBundle\Entity\MntProveedor
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set idInventarioTraslado
     *
     * @param \Ninfac\ContaBundle\Entity\InvInventario $idInventarioTraslado
     *
     * @return InvInventario
     */
    public function setIdInventarioTraslado(\Ninfac\ContaBundle\Entity\InvInventario $idInventarioTraslado = null)
    {
        $this->idInventarioTraslado = $idInventarioTraslado;

        return $this;
    }

    /**
     * Get idInventarioTraslado
     *
     * @return \Ninfac\ContaBundle\Entity\InvInventario
     */
    public function getIdInventarioTraslado()
    {
        return $this->idInventarioTraslado;
    }

    /**
     * Set idMotivoMovimiento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMotivoMovimiento $idMotivoMovimiento
     *
     * @return InvInventario
     */
    public function setIdMotivoMovimiento(\Ninfac\ContaBundle\Entity\CtlMotivoMovimiento $idMotivoMovimiento = null)
    {
        $this->idMotivoMovimiento = $idMotivoMovimiento;

        return $this;
    }

    /**
     * Get idMotivoMovimiento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMotivoMovimiento
     */
    public function getIdMotivoMovimiento()
    {
        return $this->idMotivoMovimiento;
    }

    /**
     * Set idTipomovimiento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipomovimiento $idTipomovimiento
     *
     * @return InvInventario
     */
    public function setIdTipomovimiento(\Ninfac\ContaBundle\Entity\CtlTipomovimiento $idTipomovimiento = null)
    {
        $this->idTipomovimiento = $idTipomovimiento;

        return $this;
    }

    /**
     * Get idTipomovimiento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipomovimiento
     */
    public function getIdTipomovimiento()
    {
        return $this->idTipomovimiento;
    }

    /**
     * Set idBodegaOrigen
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBodega $idBodegaOrigen
     *
     * @return InvInventario
     */
    public function setIdBodegaOrigen(\Ninfac\ContaBundle\Entity\CtlBodega $idBodegaOrigen = null)
    {
        $this->idBodegaOrigen = $idBodegaOrigen;

        return $this;
    }

    /**
     * Get idBodegaOrigen
     *
     * @return \Ninfac\ContaBundle\Entity\CtlBodega
     */
    public function getIdBodegaOrigen()
    {
        return $this->idBodegaOrigen;
    }

    /**
     * Set idBodegaDestino
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBodega $idBodegaDestino
     *
     * @return InvInventario
     */
    public function setIdBodegaDestino(\Ninfac\ContaBundle\Entity\CtlBodega $idBodegaDestino = null)
    {
        $this->idBodegaDestino = $idBodegaDestino;

        return $this;
    }

    /**
     * Get idBodegaDestino
     *
     * @return \Ninfac\ContaBundle\Entity\CtlBodega
     */
    public function getIdBodegaDestino()
    {
        return $this->idBodegaDestino;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return InvInventario
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
