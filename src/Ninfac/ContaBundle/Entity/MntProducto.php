<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntProducto
 *
 * @ORM\Table(name="mnt_producto", indexes={@ORM\Index(name="IDX_5F5A648EF448B73", columns={"id_editorial"})})
 * @ORM\Entity
 */
class MntProducto {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_producto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="CtlEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \PresentacionProducto
     *
     * @ORM\ManyToOne(targetEntity="CtlPresentacionProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_presentacion", referencedColumnName="id")
     * })
     */
    private $idPresentacion;

    /**
     * @var \SubgrupoProducto
     *
     * @ORM\ManyToOne(targetEntity="CtlSubgrupoProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_subgrupo", referencedColumnName="id")
     * })
     */
    private $idSubgrupo;

    /**
     * @var \MarcaProducto
     *
     * @ORM\ManyToOne(targetEntity="CtlMarcaProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marca", referencedColumnName="id")
     * })
     */
    private $idMarca;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=25, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exento", type="boolean", nullable=false)
     */
    private $exento;

    /**
     * @var string
     *
     * @ORM\Column(name="minimo", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $minimo;

    /**
     * @var string
     *
     * @ORM\Column(name="maximo", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $maximo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="en_promocion", type="boolean", nullable=false)
     */
    private $enPromocion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pistola", type="boolean", nullable=false)
     */
    private $pistola;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=80, nullable=true)
     */
    private $foto;

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
     * @var \CtlEditorialProducto
     *
     * @ORM\ManyToOne(targetEntity="CtlEditorialProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_editorial", referencedColumnName="id")
     * })
     */
    private $idEditorial;

    /**
     *
     * @ORM\OneToMany(targetEntity="MntPrecioProducto", mappedBy="idProducto", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $precioProducto;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return MntProducto
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
     * Set idPresentacion
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPresentacionProducto $idPresentacion
     *
     * @return MntProducto
     */
    public function setIdPresentacion(\Ninfac\ContaBundle\Entity\CtlPresentacionProducto $idPresentacion = null) {
        $this->idPresentacion = $idPresentacion;

        return $this;
    }

    /**
     * Get idPresentacion
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPresentacionProducto
     */
    public function getIdPresentacion() {
        return $this->idPresentacion;
    }

    /**
     * Set idSubgrupo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlSubgrupoProducto $idSubgrupo
     *
     * @return MntProducto
     */
    public function setIdSubgrupo(\Ninfac\ContaBundle\Entity\CtlSubgrupoProducto $idSubgrupo = null) {
        $this->idSubgrupo = $idSubgrupo;

        return $this;
    }

    /**
     * Get idSubgrupo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlSubgrupoProducto
     */
    public function getIdSubgrupo() {
        return $this->idSubgrupo;
    }

    /**
     * Set idMarca
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMarcaProducto $idMarca
     *
     * @return MntProducto
     */
    public function setIdMarca(\Ninfac\ContaBundle\Entity\CtlMarcaProducto $idMarca = null) {
        $this->idMarca = $idMarca;

        return $this;
    }

    /**
     * Get idMarca
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMarcaProducto
     */
    public function getIdMarca() {
        return $this->idMarca;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return MntProducto
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return MntProducto
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set exento
     *
     * @param boolean $exento
     *
     * @return MntProducto
     */
    public function setExento($exento) {
        $this->exento = $exento;

        return $this;
    }

    /**
     * Get exento
     *
     * @return boolean
     */
    public function getExento() {
        return $this->exento;
    }

    /**
     * Set minimo
     *
     * @param string $minimo
     *
     * @return MntProducto
     */
    public function setMinimo($minimo) {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return string
     */
    public function getMinimo() {
        return $this->minimo;
    }

    /**
     * Set maximo
     *
     * @param string $maximo
     *
     * @return MntProducto
     */
    public function setMaximo($maximo) {
        $this->maximo = $maximo;

        return $this;
    }

    /**
     * Get maximo
     *
     * @return string
     */
    public function getMaximo() {
        return $this->maximo;
    }

    /**
     * Set enPromocion
     *
     * @param boolean $enPromocion
     *
     * @return MntProducto
     */
    public function setEnPromocion($enPromocion) {
        $this->enPromocion = $enPromocion;

        return $this;
    }

    /**
     * Get enPromocion
     *
     * @return boolean
     */
    public function getEnPromocion() {
        return $this->enPromocion;
    }

    /**
     * Set pistola
     *
     * @param boolean $pistola
     *
     * @return MntProducto
     */
    public function setPistola($pistola) {
        $this->pistola = $pistola;

        return $this;
    }

    /**
     * Get pistola
     *
     * @return boolean
     */
    public function getPistola() {
        return $this->pistola;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return MntProducto
     */
    public function setFoto($foto) {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto() {
        return $this->foto;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return MntProducto
     */
    public function setActivo($activo) {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo() {
        return $this->activo;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return MntProducto
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
     * @return MntProducto
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
     * @return MntProducto
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
     * @return MntProducto
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
     * Set idEditorial
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEditorialProducto $idEditorial
     *
     * @return MntProducto
     */
    public function setIdEditorial(\Ninfac\ContaBundle\Entity\CtlEditorialProducto $idEditorial = null) {
        $this->idEditorial = $idEditorial;

        return $this;
    }

    /**
     * Get idEditorial
     *
     * @return \Ninfac\ContaBundle\Entity\CtlEditorialProducto
     */
    public function getIdEditorial() {
        return $this->idEditorial;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->precioProducto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add precioProducto
     *
     * @param \Ninfac\ContaBundle\Entity\MntPrecioProducto $precioProducto
     *
     * @return MntProducto
     */
    public function addPrecioProducto(\Ninfac\ContaBundle\Entity\MntPrecioProducto $precioProducto) {
        $this->precioProducto[] = $precioProducto;

        return $this;
    }

    /**
     * Remove precioProducto
     *
     * @param \Ninfac\ContaBundle\Entity\MntPrecioProducto $precioProducto
     */
    public function removePrecioProducto(\Ninfac\ContaBundle\Entity\MntPrecioProducto $precioProducto) {
        $this->precioProducto->removeElement($precioProducto);
    }

    /**
     * Get precioProducto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrecioProducto() {
        return $this->precioProducto;
    }

    
    public function __toString() {
        return $this->nombre ? $this->nombre : '';
    }

}
