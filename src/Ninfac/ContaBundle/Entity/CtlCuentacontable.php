<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCuentacontable
 *
 * @ORM\Table(name="ctl_cuentacontable", indexes={@ORM\Index(name="IDX_4979B440664AF320", columns={"id_empresa"})})
 * @ORM\Entity
 */
class CtlCuentacontable
{
    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=4, nullable=false)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="cuenta", type="string", length=20, nullable=false)
     */
    private $cuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_cuenta", type="string", length=2, nullable=false)
     */
    private $tipoCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="depende", type="string", length=20, nullable=false)
     */
    private $depende;

    /**
     * @var string
     *
     * @ORM\Column(name="agrupa", type="string", length=20, nullable=false)
     */
    private $agrupa;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveld", type="integer", nullable=false)
     */
    private $niveld;

    /**
     * @var integer
     *
     * @ORM\Column(name="cargar", type="integer", nullable=false)
     */
    private $cargar;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_2", type="integer", nullable=false)
     */
    private $tipo2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="subcuenta", type="boolean", nullable=false)
     */
    private $subcuenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
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
     * @ORM\SequenceGenerator(sequenceName="ctl_cuentacontable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * Set anio
     *
     * @param string $anio
     *
     * @return CtlCuentacontable
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set cuenta
     *
     * @param string $cuenta
     *
     * @return CtlCuentacontable
     */
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get cuenta
     *
     * @return string
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlCuentacontable
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
     * Set tipoCuenta
     *
     * @param string $tipoCuenta
     *
     * @return CtlCuentacontable
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    /**
     * Get tipoCuenta
     *
     * @return string
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set depende
     *
     * @param string $depende
     *
     * @return CtlCuentacontable
     */
    public function setDepende($depende)
    {
        $this->depende = $depende;

        return $this;
    }

    /**
     * Get depende
     *
     * @return string
     */
    public function getDepende()
    {
        return $this->depende;
    }

    /**
     * Set agrupa
     *
     * @param string $agrupa
     *
     * @return CtlCuentacontable
     */
    public function setAgrupa($agrupa)
    {
        $this->agrupa = $agrupa;

        return $this;
    }

    /**
     * Get agrupa
     *
     * @return string
     */
    public function getAgrupa()
    {
        return $this->agrupa;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return CtlCuentacontable
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set niveld
     *
     * @param integer $niveld
     *
     * @return CtlCuentacontable
     */
    public function setNiveld($niveld)
    {
        $this->niveld = $niveld;

        return $this;
    }

    /**
     * Get niveld
     *
     * @return integer
     */
    public function getNiveld()
    {
        return $this->niveld;
    }

    /**
     * Set cargar
     *
     * @param integer $cargar
     *
     * @return CtlCuentacontable
     */
    public function setCargar($cargar)
    {
        $this->cargar = $cargar;

        return $this;
    }

    /**
     * Get cargar
     *
     * @return integer
     */
    public function getCargar()
    {
        return $this->cargar;
    }

    /**
     * Set tipo2
     *
     * @param integer $tipo2
     *
     * @return CtlCuentacontable
     */
    public function setTipo2($tipo2)
    {
        $this->tipo2 = $tipo2;

        return $this;
    }

    /**
     * Get tipo2
     *
     * @return integer
     */
    public function getTipo2()
    {
        return $this->tipo2;
    }

    /**
     * Set subcuenta
     *
     * @param boolean $subcuenta
     *
     * @return CtlCuentacontable
     */
    public function setSubcuenta($subcuenta)
    {
        $this->subcuenta = $subcuenta;

        return $this;
    }

    /**
     * Get subcuenta
     *
     * @return boolean
     */
    public function getSubcuenta()
    {
        return $this->subcuenta;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return CtlCuentacontable
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
     * @return CtlCuentacontable
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
     * @return CtlCuentacontable
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
     * @return CtlCuentacontable
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
     * @return CtlCuentacontable
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
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return CtlCuentacontable
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
