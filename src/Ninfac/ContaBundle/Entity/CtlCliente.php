<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCliente
 *
 * @ORM\Table(name="ctl_cliente", indexes={@ORM\Index(name="IDX_232B3B6664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_232B3B6F57D32FD", columns={"id_pais"}), @ORM\Index(name="IDX_232B3B6F09CE00B", columns={"id_tipodocumento"}), @ORM\Index(name="IDX_232B3B623FA9FB2", columns={"id_bodega"}), @ORM\Index(name="IDX_232B3B66325E299", columns={"id_departamento"}), @ORM\Index(name="IDX_232B3B67EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_232B3B6B4892A2A", columns={"id_tamaniocliente"}), @ORM\Index(name="IDX_232B3B680844749", columns={"id_tipocliente"}), @ORM\Index(name="IDX_232B3B63FA73721", columns={"id_tipoprecio"})})
 * @ORM\Entity
 */
class CtlCliente
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=false)
     */
    private $codigo;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date", nullable=true)
     */
    private $fechaIngreso;

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
     * @ORM\Column(name="giro", type="string", length=50, nullable=true)
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
     * @var boolean
     *
     * @ORM\Column(name="con_credito", type="boolean", nullable=true)
     */
    private $conCredito;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recepcion_precepcion", type="boolean", nullable=true)
     */
    private $recepcionPrecepcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="signo", type="integer", nullable=true)
     */
    private $signo;

    /**
     * @var string
     *
     * @ORM\Column(name="credito", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $credito;

    /**
     * @var integer
     *
     * @ORM\Column(name="dias_validez", type="integer", nullable=true)
     */
    private $diasValidez;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exede_credito", type="boolean", nullable=true)
     */
    private $exedeCredito;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exede_dias_credito", type="boolean", nullable=true)
     */
    private $exedeDiasCredito;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cuenta_incobrable", type="boolean", nullable=true)
     */
    private $cuentaIncobrable;

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
     * @ORM\SequenceGenerator(sequenceName="ctl_cliente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTamanio
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTamanio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tamaniocliente", referencedColumnName="id")
     * })
     */
    private $idTamaniocliente;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipocliente
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipocliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocliente", referencedColumnName="id")
     * })
     */
    private $idTipocliente;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipoprecio
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipoprecio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoprecio", referencedColumnName="id")
     * })
     */
    private $idTipoprecio;

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
     * @var \Ninfac\ContaBundle\Entity\CtlPais
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;

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
     * @var \Ninfac\ContaBundle\Entity\CtlBodega
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBodega")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bodega", referencedColumnName="id")
     * })
     */
    private $idBodega;

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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return CtlCliente
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlCliente
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
     * @return CtlCliente
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return CtlCliente
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return CtlCliente
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
     * @return CtlCliente
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
     * @return CtlCliente
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
     * @return CtlCliente
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
     * @return CtlCliente
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
     * @return CtlCliente
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
     * Set giro
     *
     * @param string $giro
     *
     * @return CtlCliente
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
     * @return CtlCliente
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
     * @return CtlCliente
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
     * Set conCredito
     *
     * @param boolean $conCredito
     *
     * @return CtlCliente
     */
    public function setConCredito($conCredito)
    {
        $this->conCredito = $conCredito;

        return $this;
    }

    /**
     * Get conCredito
     *
     * @return boolean
     */
    public function getConCredito()
    {
        return $this->conCredito;
    }

    /**
     * Set recepcionPrecepcion
     *
     * @param boolean $recepcionPrecepcion
     *
     * @return CtlCliente
     */
    public function setRecepcionPrecepcion($recepcionPrecepcion)
    {
        $this->recepcionPrecepcion = $recepcionPrecepcion;

        return $this;
    }

    /**
     * Get recepcionPrecepcion
     *
     * @return boolean
     */
    public function getRecepcionPrecepcion()
    {
        return $this->recepcionPrecepcion;
    }

    /**
     * Set signo
     *
     * @param integer $signo
     *
     * @return CtlCliente
     */
    public function setSigno($signo)
    {
        $this->signo = $signo;

        return $this;
    }

    /**
     * Get signo
     *
     * @return integer
     */
    public function getSigno()
    {
        return $this->signo;
    }

    /**
     * Set credito
     *
     * @param string $credito
     *
     * @return CtlCliente
     */
    public function setCredito($credito)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito
     *
     * @return string
     */
    public function getCredito()
    {
        return $this->credito;
    }

    /**
     * Set diasValidez
     *
     * @param integer $diasValidez
     *
     * @return CtlCliente
     */
    public function setDiasValidez($diasValidez)
    {
        $this->diasValidez = $diasValidez;

        return $this;
    }

    /**
     * Get diasValidez
     *
     * @return integer
     */
    public function getDiasValidez()
    {
        return $this->diasValidez;
    }

    /**
     * Set exedeCredito
     *
     * @param boolean $exedeCredito
     *
     * @return CtlCliente
     */
    public function setExedeCredito($exedeCredito)
    {
        $this->exedeCredito = $exedeCredito;

        return $this;
    }

    /**
     * Get exedeCredito
     *
     * @return boolean
     */
    public function getExedeCredito()
    {
        return $this->exedeCredito;
    }

    /**
     * Set exedeDiasCredito
     *
     * @param boolean $exedeDiasCredito
     *
     * @return CtlCliente
     */
    public function setExedeDiasCredito($exedeDiasCredito)
    {
        $this->exedeDiasCredito = $exedeDiasCredito;

        return $this;
    }

    /**
     * Get exedeDiasCredito
     *
     * @return boolean
     */
    public function getExedeDiasCredito()
    {
        return $this->exedeDiasCredito;
    }

    /**
     * Set cuentaIncobrable
     *
     * @param boolean $cuentaIncobrable
     *
     * @return CtlCliente
     */
    public function setCuentaIncobrable($cuentaIncobrable)
    {
        $this->cuentaIncobrable = $cuentaIncobrable;

        return $this;
    }

    /**
     * Get cuentaIncobrable
     *
     * @return boolean
     */
    public function getCuentaIncobrable()
    {
        return $this->cuentaIncobrable;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return CtlCliente
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
     * @return CtlCliente
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
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return CtlCliente
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
     * @return CtlCliente
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
     * @return CtlCliente
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
     * @return CtlCliente
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
     * Set idTamaniocliente
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTamanio $idTamaniocliente
     *
     * @return CtlCliente
     */
    public function setIdTamaniocliente(\Ninfac\ContaBundle\Entity\CtlTamanio $idTamaniocliente = null)
    {
        $this->idTamaniocliente = $idTamaniocliente;

        return $this;
    }

    /**
     * Get idTamaniocliente
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTamanio
     */
    public function getIdTamaniocliente()
    {
        return $this->idTamaniocliente;
    }

    /**
     * Set idTipocliente
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipocliente $idTipocliente
     *
     * @return CtlCliente
     */
    public function setIdTipocliente(\Ninfac\ContaBundle\Entity\CtlTipocliente $idTipocliente = null)
    {
        $this->idTipocliente = $idTipocliente;

        return $this;
    }

    /**
     * Get idTipocliente
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipocliente
     */
    public function getIdTipocliente()
    {
        return $this->idTipocliente;
    }

    /**
     * Set idTipoprecio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoprecio $idTipoprecio
     *
     * @return CtlCliente
     */
    public function setIdTipoprecio(\Ninfac\ContaBundle\Entity\CtlTipoprecio $idTipoprecio = null)
    {
        $this->idTipoprecio = $idTipoprecio;

        return $this;
    }

    /**
     * Get idTipoprecio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoprecio
     */
    public function getIdTipoprecio()
    {
        return $this->idTipoprecio;
    }

    /**
     * Set idMunicipio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio
     *
     * @return CtlCliente
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
     * @return CtlCliente
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

    /**
     * Set idPais
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPais $idPais
     *
     * @return CtlCliente
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
     * Set idTipodocumento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipodocumento $idTipodocumento
     *
     * @return CtlCliente
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
     * Set idBodega
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBodega $idBodega
     *
     * @return CtlCliente
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

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return CtlCliente
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
