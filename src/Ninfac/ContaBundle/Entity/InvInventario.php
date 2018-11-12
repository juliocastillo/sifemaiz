<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvInventario
 *
 * @ORM\Table(name="inv_inventario", indexes={@ORM\Index(name="IDX_AE87F435AA67C589", columns={"id_cliente_origen_traslado"}), @ORM\Index(name="IDX_AE87F435664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_AE87F4357C1986A7", columns={"id_inventario_traslado"}), @ORM\Index(name="IDX_AE87F435C0674963", columns={"id_motivo_movimiento"}), @ORM\Index(name="IDX_AE87F43596F5D4E9", columns={"id_proveedor"}), @ORM\Index(name="IDX_AE87F43569B92C8F", columns={"id_tipo_documento"}), @ORM\Index(name="IDX_AE87F43587A87B12", columns={"id_cliente_bodega"})})
 * @ORM\Entity
 */
class InvInventario {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inv_inventario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
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
     * @ORM\Column(name="comentario", type="string", length=255, nullable=true)
     */
    private $comentario;

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
     * @var \MntCliente
     *
     * @ORM\ManyToOne(targetEntity="MntCliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente_origen_traslado", referencedColumnName="id")
     * })
     */
    private $idClienteOrigenTraslado;

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
     * @var \InvInventario
     *
     * @ORM\ManyToOne(targetEntity="InvInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario_traslado", referencedColumnName="id")
     * })
     */
    private $idInventarioTraslado;

    /**
     * @var \CtlMotivoMovimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlMotivoMovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_motivo_movimiento", referencedColumnName="id")
     * })
     */
    private $idMotivoMovimiento;

    /**
     * @var \MntProveedor
     *
     * @ORM\ManyToOne(targetEntity="MntProveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proveedor", referencedColumnName="id")
     * })
     */
    private $idProveedor;

    /**
     * @var \CtlTipoDocumento
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoDocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_documento", referencedColumnName="id")
     * })
     */
    private $idTipoDocumento;

    /**
     * @var \MntCliente
     *
     * @ORM\ManyToOne(targetEntity="MntCliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente_bodega", referencedColumnName="id")
     * })
     */
    private $idClienteBodega;

    /**
     *
     * @ORM\OneToMany(targetEntity="InvInventarioDetalle", mappedBy="idInvInventario", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $inventarioDetalle;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return InvInventario
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     *
     * @return InvInventario
     */
    public function setNumeroDocumento($numeroDocumento) {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string
     */
    public function getNumeroDocumento() {
        return $this->numeroDocumento;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return InvInventario
     */
    public function setComentario($comentario) {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario() {
        return $this->comentario;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return InvInventario
     */
    public function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return InvInventario
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return InvInventario
     */
    public function setUpdatedBy($updatedBy) {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer
     */
    public function getUpdatedBy() {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return InvInventario
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set idClienteOrigenTraslado
     *
     * @param \Ninfac\ContaBundle\Entity\MntCliente $idClienteOrigenTraslado
     *
     * @return InvInventario
     */
    public function setIdClienteOrigenTraslado(\Ninfac\ContaBundle\Entity\MntCliente $idClienteOrigenTraslado = null) {
        $this->idClienteOrigenTraslado = $idClienteOrigenTraslado;

        return $this;
    }

    /**
     * Get idClienteOrigenTraslado
     *
     * @return \Ninfac\ContaBundle\Entity\MntCliente
     */
    public function getIdClienteOrigenTraslado() {
        return $this->idClienteOrigenTraslado;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return InvInventario
     */
    public function setIdEmpresa(\Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa = null) {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \Ninfac\ContaBundle\Entity\CtlEmpresa
     */
    public function getIdEmpresa() {
        return $this->idEmpresa;
    }

    /**
     * Set idInventarioTraslado
     *
     * @param \Ninfac\ContaBundle\Entity\InvInventario $idInventarioTraslado
     *
     * @return InvInventario
     */
    public function setIdInventarioTraslado(\Ninfac\ContaBundle\Entity\InvInventario $idInventarioTraslado = null) {
        $this->idInventarioTraslado = $idInventarioTraslado;

        return $this;
    }

    /**
     * Get idInventarioTraslado
     *
     * @return \Ninfac\ContaBundle\Entity\InvInventario
     */
    public function getIdInventarioTraslado() {
        return $this->idInventarioTraslado;
    }

    /**
     * Set idMotivoMovimiento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMotivoMovimiento $idMotivoMovimiento
     *
     * @return InvInventario
     */
    public function setIdMotivoMovimiento(\Ninfac\ContaBundle\Entity\CtlMotivoMovimiento $idMotivoMovimiento = null) {
        $this->idMotivoMovimiento = $idMotivoMovimiento;

        return $this;
    }

    /**
     * Get idMotivoMovimiento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMotivoMovimiento
     */
    public function getIdMotivoMovimiento() {
        return $this->idMotivoMovimiento;
    }

    /**
     * Set idProveedor
     *
     * @param \Ninfac\ContaBundle\Entity\MntProveedor $idProveedor
     *
     * @return InvInventario
     */
    public function setIdProveedor(\Ninfac\ContaBundle\Entity\MntProveedor $idProveedor = null) {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return \Ninfac\ContaBundle\Entity\MntProveedor
     */
    public function getIdProveedor() {
        return $this->idProveedor;
    }

    /**
     * Set idTipoDocumento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoDocumento $idTipoDocumento
     *
     * @return InvInventario
     */
    public function setIdTipoDocumento(\Ninfac\ContaBundle\Entity\CtlTipoDocumento $idTipoDocumento = null) {
        $this->idTipoDocumento = $idTipoDocumento;

        return $this;
    }

    /**
     * Get idTipoDocumento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoDocumento
     */
    public function getIdTipoDocumento() {
        return $this->idTipoDocumento;
    }

    /**
     * Set idClienteBodega
     *
     * @param \Ninfac\ContaBundle\Entity\MntCliente $idClienteBodega
     *
     * @return InvInventario
     */
    public function setIdClienteBodega(\Ninfac\ContaBundle\Entity\MntCliente $idClienteBodega = null) {
        $this->idClienteBodega = $idClienteBodega;

        return $this;
    }

    /**
     * Get idClienteBodega
     *
     * @return \Ninfac\ContaBundle\Entity\MntCliente
     */
    public function getIdClienteBodega() {
        return $this->idClienteBodega;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->inventarioDetalle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add inventarioDetalle
     *
     * @param \Ninfac\ContaBundle\Entity\InvInventarioDetalle $inventarioDetalle
     *
     * @return InvInventario
     */
    public function addInventarioDetalle(\Ninfac\ContaBundle\Entity\InvInventarioDetalle $inventarioDetalle) {
        $this->inventarioDetalle[] = $inventarioDetalle;

        return $this;
    }

    /**
     * Remove inventarioDetalle
     *
     * @param \Ninfac\ContaBundle\Entity\InvInventarioDetalle $inventarioDetalle
     */
    public function removeInventarioDetalle(\Ninfac\ContaBundle\Entity\InvInventarioDetalle $inventarioDetalle) {
        $this->inventarioDetalle->removeElement($inventarioDetalle);
    }

    /**
     * Get inventarioDetalle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInventarioDetalle() {
        return $this->inventarioDetalle;
    }

    public function __toString() {
        return (string) $this->numeroDocumento ? (string) $this->numeroDocumento : '';
    }

}
