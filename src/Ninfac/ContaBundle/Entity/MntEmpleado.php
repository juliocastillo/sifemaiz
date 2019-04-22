<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntEmpleado
 *
 * @ORM\Table(name="mnt_empleado", indexes={@ORM\Index(name="IDX_2138DDC9995BA0E1", columns={"id_banco"}), @ORM\Index(name="IDX_2138DDC9D56B1641", columns={"id_cargo"}), @ORM\Index(name="IDX_2138DDC9664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_2138DDC97EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_2138DDC9FA6EE521", columns={"id_nivelestudio"}), @ORM\Index(name="IDX_2138DDC9DBDE0CDC", columns={"id_oficina"}), @ORM\Index(name="IDX_2138DDC9A7194A90", columns={"id_sexo"}), @ORM\Index(name="IDX_2138DDC92219D08C", columns={"id_tipocontrato"}), @ORM\Index(name="IDX_2138DDC940C6C314", columns={"id_estadocivil"})})
 * @ORM\Entity
 */
class MntEmpleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_dui", type="string", length=50, nullable=false)
     */
    private $nombreDui;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_dui", type="string", length=50, nullable=false)
     */
    private $apellidoDui;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_isss", type="string", length=50, nullable=true)
     */
    private $nombreIsss;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_isss", type="string", length=50, nullable=true)
     */
    private $apellidoIsss;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nac", type="date", nullable=true)
     */
    private $fechaNac;

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
     * @ORM\Column(name="cuenta_bancaria", type="string", length=30, nullable=true)
     */
    private $cuentaBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="persona_emergencia", type="string", length=80, nullable=true)
     */
    private $personaEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="parentezco_emergencia", type="string", length=25, nullable=true)
     */
    private $parentezcoEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_emergencia", type="string", length=20, nullable=true)
     */
    private $telefonoEmergencia;

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
     * @var \CtlBanco
     *
     * @ORM\ManyToOne(targetEntity="CtlBanco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_banco", referencedColumnName="id")
     * })
     */
    private $idBanco;

    /**
     * @var \CtlCargo
     *
     * @ORM\ManyToOne(targetEntity="CtlCargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargo", referencedColumnName="id")
     * })
     */
    private $idCargo;

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
     * @var \CtlNivelestudio
     *
     * @ORM\ManyToOne(targetEntity="CtlNivelestudio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nivelestudio", referencedColumnName="id")
     * })
     */
    private $idNivelestudio;

    /**
     * @var \CtlOficina
     *
     * @ORM\ManyToOne(targetEntity="CtlOficina")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_oficina", referencedColumnName="id")
     * })
     */
    private $idOficina;

    /**
     * @var \CtlSexo
     *
     * @ORM\ManyToOne(targetEntity="CtlSexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sexo", referencedColumnName="id")
     * })
     */
    private $idSexo;

    /**
     * @var \CtlTipocontrato
     *
     * @ORM\ManyToOne(targetEntity="CtlTipocontrato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocontrato", referencedColumnName="id")
     * })
     */
    private $idTipocontrato;

    /**
     * @var \CtlEstadocivil
     *
     * @ORM\ManyToOne(targetEntity="CtlEstadocivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estadocivil", referencedColumnName="id")
     * })
     */
    private $idEstadocivil;



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
     * Set fechaNac
     *
     * @param \DateTime $fechaNac
     *
     * @return MntEmpleado
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \DateTime
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
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
     * Set personaEmergencia
     *
     * @param string $personaEmergencia
     *
     * @return MntEmpleado
     */
    public function setPersonaEmergencia($personaEmergencia)
    {
        $this->personaEmergencia = $personaEmergencia;

        return $this;
    }

    /**
     * Get personaEmergencia
     *
     * @return string
     */
    public function getPersonaEmergencia()
    {
        return $this->personaEmergencia;
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
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * @return MntEmpleado
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
     * Set idCargo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCargo $idCargo
     *
     * @return MntEmpleado
     */
    public function setIdCargo(\Ninfac\ContaBundle\Entity\CtlCargo $idCargo = null)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCargo
     */
    public function getIdCargo()
    {
        return $this->idCargo;
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
     * Set idNivelestudio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlNivelestudio $idNivelestudio
     *
     * @return MntEmpleado
     */
    public function setIdNivelestudio(\Ninfac\ContaBundle\Entity\CtlNivelestudio $idNivelestudio = null)
    {
        $this->idNivelestudio = $idNivelestudio;

        return $this;
    }

    /**
     * Get idNivelestudio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlNivelestudio
     */
    public function getIdNivelestudio()
    {
        return $this->idNivelestudio;
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
    
    public function __toString() {
        return (string) $this->nombreDui . ' '. (string) $this->apellidoDui;
    }
}
