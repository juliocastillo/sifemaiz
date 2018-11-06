<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntPrecioProducto
 *
 * @ORM\Table(name="mnt_precio_producto", indexes={@ORM\Index(name="IDX_C0C853DF760EA80", columns={"id_producto"}), @ORM\Index(name="IDX_C0C853D9B02FA4D", columns={"id_tipo_precio"})})
 * @ORM\Entity
 */
class MntPrecioProducto {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_precio_producto_id_seq", allocationSize=1, initialValue=1)
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
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $precio;

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
     * @var \MntProducto
     *
     * @ORM\ManyToOne(targetEntity="MntProducto", inversedBy="precioProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     * })
     */
    private $idProducto;

    /**
     * @var \CtlTipoPrecio
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoPrecio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_precio", referencedColumnName="id", nullable=false)
     * })
     */
    private $idTipoPrecio;

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
     * Set precio
     *
     * @param string $precio
     *
     * @return MntPrecioProducto
     */
    public function setPrecio($precio) {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio() {
        return $this->precio;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return MntPrecioProducto
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
     * @return MntPrecioProducto
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
     * @return MntPrecioProducto
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
     * @return MntPrecioProducto
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
     * Set idProducto
     *
     * @param \Ninfac\ContaBundle\Entity\MntProducto $idProducto
     *
     * @return MntPrecioProducto
     */
    public function setIdProducto(\Ninfac\ContaBundle\Entity\MntProducto $idProducto = null) {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \Ninfac\ContaBundle\Entity\MntProducto
     */
    public function getIdProducto() {
        return $this->idProducto;
    }

    /**
     * Set idTipoPrecio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoPrecio $idTipoPrecio
     *
     * @return MntPrecioProducto
     */
    public function setIdTipoPrecio(\Ninfac\ContaBundle\Entity\CtlTipoPrecio $idTipoPrecio = null) {
        $this->idTipoPrecio = $idTipoPrecio;

        return $this;
    }

    /**
     * Get idTipoPrecio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoPrecio
     */
    public function getIdTipoPrecio() {
        return $this->idTipoPrecio;
    }

    public function __toString() {
        return $this->precio ? $this->precio : '';
    }
}
