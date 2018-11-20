<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntProveedor
 *
 * @ORM\Table(name="mnt_proveedor", uniqueConstraints={@ORM\UniqueConstraint(name="uk_proveedor", columns={"id_pais", "nombre"})}, indexes={@ORM\Index(name="IDX_71E5C3607EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_71E5C360F57D32FD", columns={"id_pais"})})
 * @ORM\Entity
 */
class MntProveedor {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_proveedor_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_social", type="string", length=50, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="giro", type="string", length=70, nullable=true)
     */
    private $giro;

    /**
     * @var string
     *
     * @ORM\Column(name="registro", type="string", length=20, nullable=true)
     */
    private $registro;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=20, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="dui", type="string", length=10, nullable=true)
     */
    private $dui;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=80, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exento", type="boolean", nullable=true)
     */
    private $exento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="extranjero", type="boolean", nullable=true)
     */
    private $extranjero;

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
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

    /**
     * @var \CtlPais
     *
     * @ORM\ManyToOne(targetEntity="CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;

    /**
     * @var \MntCuentacontable
     *
     * @ORM\ManyToOne(targetEntity="MntCuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cuentacontable", referencedColumnName="id", nullable=false)
     * })
     */
    private $idCuentacontable;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return MntProveedor
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
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return MntProveedor
     */
    public function setRazonSocial($razonSocial) {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial() {
        return $this->razonSocial;
    }

    /**
     * Set giro
     *
     * @param string $giro
     *
     * @return MntProveedor
     */
    public function setGiro($giro) {
        $this->giro = $giro;

        return $this;
    }

    /**
     * Get giro
     *
     * @return string
     */
    public function getGiro() {
        return $this->giro;
    }

    /**
     * Set registro
     *
     * @param string $registro
     *
     * @return MntProveedor
     */
    public function setRegistro($registro) {
        $this->registro = $registro;

        return $this;
    }

    /**
     * Get registro
     *
     * @return string
     */
    public function getRegistro() {
        return $this->registro;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return MntProveedor
     */
    public function setNit($nit) {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit() {
        return $this->nit;
    }

    /**
     * Set dui
     *
     * @param string $dui
     *
     * @return MntProveedor
     */
    public function setDui($dui) {
        $this->dui = $dui;

        return $this;
    }

    /**
     * Get dui
     *
     * @return string
     */
    public function getDui() {
        return $this->dui;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return MntProveedor
     */
    public function setDireccion($direccion) {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion() {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return MntProveedor
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono() {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return MntProveedor
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set exento
     *
     * @param boolean $exento
     *
     * @return MntProveedor
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
     * Set extranjero
     *
     * @param boolean $extranjero
     *
     * @return MntProveedor
     */
    public function setExtranjero($extranjero) {
        $this->extranjero = $extranjero;

        return $this;
    }

    /**
     * Get extranjero
     *
     * @return boolean
     */
    public function getExtranjero() {
        return $this->extranjero;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return MntProveedor
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
     * @return MntProveedor
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
     * @return MntProveedor
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
     * @return MntProveedor
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
     * @return MntProveedor
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
     * Set idMunicipio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio
     *
     * @return MntProveedor
     */
    public function setIdMunicipio(\Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio = null) {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMunicipio
     */
    public function getIdMunicipio() {
        return $this->idMunicipio;
    }

    /**
     * Set idPais
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPais $idPais
     *
     * @return MntProveedor
     */
    public function setIdPais(\Ninfac\ContaBundle\Entity\CtlPais $idPais = null) {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPais
     */
    public function getIdPais() {
        return $this->idPais;
    }

    /**
     * Set idCuentacontable
     *
     * @param \Ninfac\ContaBundle\Entity\MntCuentacontable $idCuentacontable
     *
     * @return MntProveedor
     */
    public function setIdCuentacontable(\Ninfac\ContaBundle\Entity\MntCuentacontable $idCuentacontable = null) {
        $this->idCuentacontable = $idCuentacontable;

        return $this;
    }

    /**
     * Get idCuentacontable
     *
     * @return \Ninfac\ContaBundle\Entity\MntCuentacontable
     */
    public function getIdCuentacontable() {
        return $this->idCuentacontable;
    }

    public function __toString() {
        return (string) $this->nombre;
    }

}
