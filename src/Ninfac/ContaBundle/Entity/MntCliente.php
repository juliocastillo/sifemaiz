<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCliente
 *
 * @ORM\Table(name="mnt_cliente", uniqueConstraints={@ORM\UniqueConstraint(name="uk_cliente", columns={"nombre", "id_pais"})}, indexes={@ORM\Index(name="IDX_77D069F8664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_77D069F87EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_77D069F89B02FA4D", columns={"id_tipo_precio"}), @ORM\Index(name="IDX_77D069F8F57D32FD", columns={"id_pais"}), @ORM\Index(name="IDX_77D069F869B92C8F", columns={"id_tipo_documento"})})
 * @ORM\Entity
 */
class MntCliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_cliente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consignatario", type="boolean", nullable=true)
     */
    private $consignatario;

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
     * @ORM\Column(name="giro", type="string", length=50, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=50, nullable=true)
     */
    private $contacto;

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
     * @var \CtlEmpresa
     *
     * @ORM\ManyToOne(targetEntity="CtlEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

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
     * @var \CtlTipoPrecio
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoPrecio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_precio", referencedColumnName="id", nullable=false)
     * })
     */
    private $idTipoPrecio;

    /**
     * @var \CtlPais
     *
     * @ORM\ManyToOne(targetEntity="CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id", nullable=false)
     * })
     */
    private $idPais;

    /**
     * @var \CtlTipoDocumento
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoDocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_documento", referencedColumnName="id", nullable=false)
     * })
     */
    private $idTipoDocumento;



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
     * Set consignatario
     *
     * @param boolean $consignatario
     *
     * @return MntCliente
     */
    public function setConsignatario($consignatario)
    {
        $this->consignatario = $consignatario;

        return $this;
    }

    /**
     * Get consignatario
     *
     * @return boolean
     */
    public function getConsignatario()
    {
        return $this->consignatario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return MntCliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return MntCliente
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set giro
     *
     * @param string $giro
     *
     * @return MntCliente
     */
    public function setGiro($giro)
    {
        $this->giro = $giro;

        return $this;
    }

    /**
     * Get giro
     *
     * @return string
     */
    public function getGiro()
    {
        return $this->giro;
    }

    /**
     * Set registro
     *
     * @param string $registro
     *
     * @return MntCliente
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;

        return $this;
    }

    /**
     * Get registro
     *
     * @return string
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return MntCliente
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set dui
     *
     * @param string $dui
     *
     * @return MntCliente
     */
    public function setDui($dui)
    {
        $this->dui = $dui;

        return $this;
    }

    /**
     * Get dui
     *
     * @return string
     */
    public function getDui()
    {
        return $this->dui;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return MntCliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return MntCliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return MntCliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set exento
     *
     * @param boolean $exento
     *
     * @return MntCliente
     */
    public function setExento($exento)
    {
        $this->exento = $exento;

        return $this;
    }

    /**
     * Get exento
     *
     * @return boolean
     */
    public function getExento()
    {
        return $this->exento;
    }

    /**
     * Set extranjero
     *
     * @param boolean $extranjero
     *
     * @return MntCliente
     */
    public function setExtranjero($extranjero)
    {
        $this->extranjero = $extranjero;

        return $this;
    }

    /**
     * Get extranjero
     *
     * @return boolean
     */
    public function getExtranjero()
    {
        return $this->extranjero;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return MntCliente
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return MntCliente
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
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return MntCliente
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
     * @return MntCliente
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
     * @return MntCliente
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
     * @return MntCliente
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
     * @return MntCliente
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
     * Set idMunicipio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio
     *
     * @return MntCliente
     */
    public function setIdMunicipio(\Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMunicipio
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set idTipoPrecio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoPrecio $idTipoPrecio
     *
     * @return MntCliente
     */
    public function setIdTipoPrecio(\Ninfac\ContaBundle\Entity\CtlTipoPrecio $idTipoPrecio = null)
    {
        $this->idTipoPrecio = $idTipoPrecio;

        return $this;
    }

    /**
     * Get idTipoPrecio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoPrecio
     */
    public function getIdTipoPrecio()
    {
        return $this->idTipoPrecio;
    }

    /**
     * Set idPais
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPais $idPais
     *
     * @return MntCliente
     */
    public function setIdPais(\Ninfac\ContaBundle\Entity\CtlPais $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPais
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set idTipoDocumento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoDocumento $idTipoDocumento
     *
     * @return MntCliente
     */
    public function setIdTipoDocumento(\Ninfac\ContaBundle\Entity\CtlTipoDocumento $idTipoDocumento = null)
    {
        $this->idTipoDocumento = $idTipoDocumento;

        return $this;
    }

    /**
     * Get idTipoDocumento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoDocumento
     */
    public function getIdTipoDocumento()
    {
        return $this->idTipoDocumento;
    }
}
