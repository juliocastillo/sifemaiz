<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntProveedor
 *
 * @ORM\Table(name="mnt_proveedor", indexes={@ORM\Index(name="IDX_71E5C3606325E299", columns={"id_departamento"}), @ORM\Index(name="IDX_71E5C3607EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_71E5C360F57D32FD", columns={"id_pais"}), @ORM\Index(name="IDX_71E5C3602D3EB78E", columns={"id_tamanioproveedor"})})
 * @ORM\Entity
 */
class MntProveedor
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

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
     * @var string
     *
     * @ORM\Column(name="registro", type="string", length=10, nullable=true)
     */
    private $registro;

    /**
     * @var string
     *
     * @ORM\Column(name="dui", type="string", length=10, nullable=true)
     */
    private $dui;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=15, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="giro", type="string", length=70, nullable=true)
     */
    private $giro;

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
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_proveedor_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTamanio
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTamanio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tamanioproveedor", referencedColumnName="id")
     * })
     */
    private $idTamanioproveedor;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlPais
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento", referencedColumnName="id")
     * })
     */
    private $idDepartamento;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return MntProveedor
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return MntProveedor
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
     * @return MntProveedor
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
     * @return MntProveedor
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
     * Set registro
     *
     * @param string $registro
     *
     * @return MntProveedor
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
     * Set dui
     *
     * @param string $dui
     *
     * @return MntProveedor
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
     * Set nit
     *
     * @param string $nit
     *
     * @return MntProveedor
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
     * Set giro
     *
     * @param string $giro
     *
     * @return MntProveedor
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
     * Set exento
     *
     * @param boolean $exento
     *
     * @return MntProveedor
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
     * @return MntProveedor
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
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return MntProveedor
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
     * @return MntProveedor
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
     * @return MntProveedor
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
     * @return MntProveedor
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return MntProveedor
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTamanioproveedor
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTamanio $idTamanioproveedor
     *
     * @return MntProveedor
     */
    public function setIdTamanioproveedor(\Ninfac\ContaBundle\Entity\CtlTamanio $idTamanioproveedor = null)
    {
        $this->idTamanioproveedor = $idTamanioproveedor;

        return $this;
    }

    /**
     * Get idTamanioproveedor
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTamanio
     */
    public function getIdTamanioproveedor()
    {
        return $this->idTamanioproveedor;
    }

    /**
     * Set idPais
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPais $idPais
     *
     * @return MntProveedor
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
     * Set idMunicipio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio
     *
     * @return MntProveedor
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
     * Set idDepartamento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlDepartamento $idDepartamento
     *
     * @return MntProveedor
     */
    public function setIdDepartamento(\Ninfac\ContaBundle\Entity\CtlDepartamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlDepartamento
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
}
