<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntEmpleado
 *
 * @ORM\Table(name="mnt_empleado", indexes={@ORM\Index(name="IDX_2138DDC9664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_2138DDC96325E299", columns={"id_departamento"}), @ORM\Index(name="IDX_2138DDC97EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_2138DDC91BC6DB65", columns={"id_cargoempleado"}), @ORM\Index(name="IDX_2138DDC9995BA0E1", columns={"id_banco"}), @ORM\Index(name="IDX_2138DDC9A7194A90", columns={"id_sexo"}), @ORM\Index(name="IDX_2138DDC940C6C314", columns={"id_estadocivil"}), @ORM\Index(name="IDX_2138DDC9F8B09C83", columns={"id_centrotrabajo"}), @ORM\Index(name="IDX_2138DDC9DBDE0CDC", columns={"id_oficina"}), @ORM\Index(name="IDX_2138DDC92219D08C", columns={"id_tipocontrato"}), @ORM\Index(name="IDX_2138DDC96C0BA731", columns={"id_institucionsap"})})
 * @ORM\Entity
 */
class MntEmpleado
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_dui", type="string", length=40, nullable=true)
     */
    private $nombreDui;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_dui", type="string", length=40, nullable=true)
     */
    private $apellidoDui;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_isss", type="string", length=40, nullable=true)
     */
    private $nombreIsss;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_isss", type="string", length=40, nullable=true)
     */
    private $apellidoIsss;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnac", type="date", nullable=true)
     */
    private $fnac;

    /**
     * @var string
     *
     * @ORM\Column(name="dui", type="string", length=10, nullable=true)
     */
    private $dui;

    /**
     * @var string
     *
     * @ORM\Column(name="isss", type="string", length=10, nullable=true)
     */
    private $isss;

    /**
     * @var string
     *
     * @ORM\Column(name="nup", type="string", length=12, nullable=true)
     */
    private $nup;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=15, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="sueldo_base", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sueldoBase;

    /**
     * @var integer
     *
     * @ORM\Column(name="horas_laborales", type="integer", nullable=true)
     */
    private $horasLaborales;

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
     * @ORM\Column(name="cuenta_bancaria", type="string", length=30, nullable=true)
     */
    private $cuentaBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="emergencia", type="string", length=80, nullable=true)
     */
    private $emergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_emergencia", type="string", length=20, nullable=true)
     */
    private $telefonoEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="parentezco_emergencia", type="string", length=25, nullable=true)
     */
    private $parentezcoEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="nivel_estudio", type="string", length=30, nullable=true)
     */
    private $nivelEstudio;

    /**
     * @var string
     *
     * @ORM\Column(name="profesion", type="string", length=30, nullable=true)
     */
    private $profesion;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_licencia_conducir", type="string", length=15, nullable=true)
     */
    private $numeroLicenciaConducir;

    /**
     * @var string
     *
     * @ORM\Column(name="clase_licencia", type="string", length=15, nullable=true)
     */
    private $claseLicencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aplica_isss", type="boolean", nullable=true)
     */
    private $aplicaIsss;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255, nullable=true)
     */
    private $comentario;

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
     * @ORM\SequenceGenerator(sequenceName="mnt_empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCentrotrabajo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCentrotrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centrotrabajo", referencedColumnName="id")
     * })
     */
    private $idCentrotrabajo;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlOficina
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlOficina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_oficina", referencedColumnName="id")
     * })
     */
    private $idOficina;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipocontrato
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipocontrato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocontrato", referencedColumnName="id")
     * })
     */
    private $idTipocontrato;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlInstitucionsap
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlInstitucionsap")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_institucionsap", referencedColumnName="id")
     * })
     */
    private $idInstitucionsap;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlEstadocivil
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlEstadocivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estadocivil", referencedColumnName="id")
     * })
     */
    private $idEstadocivil;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlSexo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlSexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sexo", referencedColumnName="id")
     * })
     */
    private $idSexo;

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
     * @var \Ninfac\ContaBundle\Entity\CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCargoempleado
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCargoempleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargoempleado", referencedColumnName="id")
     * })
     */
    private $idCargoempleado;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlBanco
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlBanco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_banco", referencedColumnName="id")
     * })
     */
    private $idBanco;

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
     * Set nombreDui
     *
     * @param string $nombreDui
     *
     * @return MntEmpleado
     */
    public function setNombreDui($nombreDui)
    {
        $this->nombreDui = $nombreDui;

        return $this;
    }

    /**
     * Get nombreDui
     *
     * @return string
     */
    public function getNombreDui()
    {
        return $this->nombreDui;
    }

    /**
     * Set apellidoDui
     *
     * @param string $apellidoDui
     *
     * @return MntEmpleado
     */
    public function setApellidoDui($apellidoDui)
    {
        $this->apellidoDui = $apellidoDui;

        return $this;
    }

    /**
     * Get apellidoDui
     *
     * @return string
     */
    public function getApellidoDui()
    {
        return $this->apellidoDui;
    }

    /**
     * Set nombreIsss
     *
     * @param string $nombreIsss
     *
     * @return MntEmpleado
     */
    public function setNombreIsss($nombreIsss)
    {
        $this->nombreIsss = $nombreIsss;

        return $this;
    }

    /**
     * Get nombreIsss
     *
     * @return string
     */
    public function getNombreIsss()
    {
        return $this->nombreIsss;
    }

    /**
     * Set apellidoIsss
     *
     * @param string $apellidoIsss
     *
     * @return MntEmpleado
     */
    public function setApellidoIsss($apellidoIsss)
    {
        $this->apellidoIsss = $apellidoIsss;

        return $this;
    }

    /**
     * Get apellidoIsss
     *
     * @return string
     */
    public function getApellidoIsss()
    {
        return $this->apellidoIsss;
    }

    /**
     * Set fnac
     *
     * @param \DateTime $fnac
     *
     * @return MntEmpleado
     */
    public function setFnac($fnac)
    {
        $this->fnac = $fnac;

        return $this;
    }

    /**
     * Get fnac
     *
     * @return \DateTime
     */
    public function getFnac()
    {
        return $this->fnac;
    }

    /**
     * Set dui
     *
     * @param string $dui
     *
     * @return MntEmpleado
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
     * Set isss
     *
     * @param string $isss
     *
     * @return MntEmpleado
     */
    public function setIsss($isss)
    {
        $this->isss = $isss;

        return $this;
    }

    /**
     * Get isss
     *
     * @return string
     */
    public function getIsss()
    {
        return $this->isss;
    }

    /**
     * Set nup
     *
     * @param string $nup
     *
     * @return MntEmpleado
     */
    public function setNup($nup)
    {
        $this->nup = $nup;

        return $this;
    }

    /**
     * Get nup
     *
     * @return string
     */
    public function getNup()
    {
        return $this->nup;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return MntEmpleado
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
     * Set sueldoBase
     *
     * @param string $sueldoBase
     *
     * @return MntEmpleado
     */
    public function setSueldoBase($sueldoBase)
    {
        $this->sueldoBase = $sueldoBase;

        return $this;
    }

    /**
     * Get sueldoBase
     *
     * @return string
     */
    public function getSueldoBase()
    {
        return $this->sueldoBase;
    }

    /**
     * Set horasLaborales
     *
     * @param integer $horasLaborales
     *
     * @return MntEmpleado
     */
    public function setHorasLaborales($horasLaborales)
    {
        $this->horasLaborales = $horasLaborales;

        return $this;
    }

    /**
     * Get horasLaborales
     *
     * @return integer
     */
    public function getHorasLaborales()
    {
        return $this->horasLaborales;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * Set cuentaBancaria
     *
     * @param string $cuentaBancaria
     *
     * @return MntEmpleado
     */
    public function setCuentaBancaria($cuentaBancaria)
    {
        $this->cuentaBancaria = $cuentaBancaria;

        return $this;
    }

    /**
     * Get cuentaBancaria
     *
     * @return string
     */
    public function getCuentaBancaria()
    {
        return $this->cuentaBancaria;
    }

    /**
     * Set emergencia
     *
     * @param string $emergencia
     *
     * @return MntEmpleado
     */
    public function setEmergencia($emergencia)
    {
        $this->emergencia = $emergencia;

        return $this;
    }

    /**
     * Get emergencia
     *
     * @return string
     */
    public function getEmergencia()
    {
        return $this->emergencia;
    }

    /**
     * Set telefonoEmergencia
     *
     * @param string $telefonoEmergencia
     *
     * @return MntEmpleado
     */
    public function setTelefonoEmergencia($telefonoEmergencia)
    {
        $this->telefonoEmergencia = $telefonoEmergencia;

        return $this;
    }

    /**
     * Get telefonoEmergencia
     *
     * @return string
     */
    public function getTelefonoEmergencia()
    {
        return $this->telefonoEmergencia;
    }

    /**
     * Set parentezcoEmergencia
     *
     * @param string $parentezcoEmergencia
     *
     * @return MntEmpleado
     */
    public function setParentezcoEmergencia($parentezcoEmergencia)
    {
        $this->parentezcoEmergencia = $parentezcoEmergencia;

        return $this;
    }

    /**
     * Get parentezcoEmergencia
     *
     * @return string
     */
    public function getParentezcoEmergencia()
    {
        return $this->parentezcoEmergencia;
    }

    /**
     * Set nivelEstudio
     *
     * @param string $nivelEstudio
     *
     * @return MntEmpleado
     */
    public function setNivelEstudio($nivelEstudio)
    {
        $this->nivelEstudio = $nivelEstudio;

        return $this;
    }

    /**
     * Get nivelEstudio
     *
     * @return string
     */
    public function getNivelEstudio()
    {
        return $this->nivelEstudio;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     *
     * @return MntEmpleado
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set numeroLicenciaConducir
     *
     * @param string $numeroLicenciaConducir
     *
     * @return MntEmpleado
     */
    public function setNumeroLicenciaConducir($numeroLicenciaConducir)
    {
        $this->numeroLicenciaConducir = $numeroLicenciaConducir;

        return $this;
    }

    /**
     * Get numeroLicenciaConducir
     *
     * @return string
     */
    public function getNumeroLicenciaConducir()
    {
        return $this->numeroLicenciaConducir;
    }

    /**
     * Set claseLicencia
     *
     * @param string $claseLicencia
     *
     * @return MntEmpleado
     */
    public function setClaseLicencia($claseLicencia)
    {
        $this->claseLicencia = $claseLicencia;

        return $this;
    }

    /**
     * Get claseLicencia
     *
     * @return string
     */
    public function getClaseLicencia()
    {
        return $this->claseLicencia;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return MntEmpleado
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
     * Set aplicaIsss
     *
     * @param boolean $aplicaIsss
     *
     * @return MntEmpleado
     */
    public function setAplicaIsss($aplicaIsss)
    {
        $this->aplicaIsss = $aplicaIsss;

        return $this;
    }

    /**
     * Get aplicaIsss
     *
     * @return boolean
     */
    public function getAplicaIsss()
    {
        return $this->aplicaIsss;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return MntEmpleado
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * Set idCentrotrabajo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCentrotrabajo $idCentrotrabajo
     *
     * @return MntEmpleado
     */
    public function setIdCentrotrabajo(\Ninfac\ContaBundle\Entity\CtlCentrotrabajo $idCentrotrabajo = null)
    {
        $this->idCentrotrabajo = $idCentrotrabajo;

        return $this;
    }

    /**
     * Get idCentrotrabajo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCentrotrabajo
     */
    public function getIdCentrotrabajo()
    {
        return $this->idCentrotrabajo;
    }

    /**
     * Set idOficina
     *
     * @param \Ninfac\ContaBundle\Entity\CtlOficina $idOficina
     *
     * @return MntEmpleado
     */
    public function setIdOficina(\Ninfac\ContaBundle\Entity\CtlOficina $idOficina = null)
    {
        $this->idOficina = $idOficina;

        return $this;
    }

    /**
     * Get idOficina
     *
     * @return \Ninfac\ContaBundle\Entity\CtlOficina
     */
    public function getIdOficina()
    {
        return $this->idOficina;
    }

    /**
     * Set idTipocontrato
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipocontrato $idTipocontrato
     *
     * @return MntEmpleado
     */
    public function setIdTipocontrato(\Ninfac\ContaBundle\Entity\CtlTipocontrato $idTipocontrato = null)
    {
        $this->idTipocontrato = $idTipocontrato;

        return $this;
    }

    /**
     * Get idTipocontrato
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipocontrato
     */
    public function getIdTipocontrato()
    {
        return $this->idTipocontrato;
    }

    /**
     * Set idInstitucionsap
     *
     * @param \Ninfac\ContaBundle\Entity\CtlInstitucionsap $idInstitucionsap
     *
     * @return MntEmpleado
     */
    public function setIdInstitucionsap(\Ninfac\ContaBundle\Entity\CtlInstitucionsap $idInstitucionsap = null)
    {
        $this->idInstitucionsap = $idInstitucionsap;

        return $this;
    }

    /**
     * Get idInstitucionsap
     *
     * @return \Ninfac\ContaBundle\Entity\CtlInstitucionsap
     */
    public function getIdInstitucionsap()
    {
        return $this->idInstitucionsap;
    }

    /**
     * Set idEstadocivil
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEstadocivil $idEstadocivil
     *
     * @return MntEmpleado
     */
    public function setIdEstadocivil(\Ninfac\ContaBundle\Entity\CtlEstadocivil $idEstadocivil = null)
    {
        $this->idEstadocivil = $idEstadocivil;

        return $this;
    }

    /**
     * Get idEstadocivil
     *
     * @return \Ninfac\ContaBundle\Entity\CtlEstadocivil
     */
    public function getIdEstadocivil()
    {
        return $this->idEstadocivil;
    }

    /**
     * Set idSexo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlSexo $idSexo
     *
     * @return MntEmpleado
     */
    public function setIdSexo(\Ninfac\ContaBundle\Entity\CtlSexo $idSexo = null)
    {
        $this->idSexo = $idSexo;

        return $this;
    }

    /**
     * Get idSexo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlSexo
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }

    /**
     * Set idDepartamento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlDepartamento $idDepartamento
     *
     * @return MntEmpleado
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
     * Set idMunicipio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio
     *
     * @return MntEmpleado
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
     * Set idCargoempleado
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCargoempleado $idCargoempleado
     *
     * @return MntEmpleado
     */
    public function setIdCargoempleado(\Ninfac\ContaBundle\Entity\CtlCargoempleado $idCargoempleado = null)
    {
        $this->idCargoempleado = $idCargoempleado;

        return $this;
    }

    /**
     * Get idCargoempleado
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCargoempleado
     */
    public function getIdCargoempleado()
    {
        return $this->idCargoempleado;
    }

    /**
     * Set idBanco
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBanco $idBanco
     *
     * @return MntEmpleado
     */
    public function setIdBanco(\Ninfac\ContaBundle\Entity\CtlBanco $idBanco = null)
    {
        $this->idBanco = $idBanco;

        return $this;
    }

    /**
     * Get idBanco
     *
     * @return \Ninfac\ContaBundle\Entity\CtlBanco
     */
    public function getIdBanco()
    {
        return $this->idBanco;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return MntEmpleado
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
