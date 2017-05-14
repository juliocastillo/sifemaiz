<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlProducto
 *
 * @ORM\Table(name="ctl_producto", indexes={@ORM\Index(name="IDX_CE4BEAC3E88F3A0E", columns={"id_punto_venta"}), @ORM\Index(name="IDX_CE4BEAC3664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_CE4BEAC3628BDAE3", columns={"id_grupo"}), @ORM\Index(name="IDX_CE4BEAC3E98F4023", columns={"id_marca"}), @ORM\Index(name="IDX_CE4BEAC37569F2C7", columns={"id_presentacion"}), @ORM\Index(name="IDX_CE4BEAC3A666989C", columns={"id_subgrupo"})})
 * @ORM\Entity
 */
class CtlProducto
{
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
     * @ORM\Column(name="no_sujeto", type="boolean", nullable=false)
     */
    private $noSujeto;

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
     * @ORM\SequenceGenerator(sequenceName="ctl_producto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlPresentacion
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlPresentacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_presentacion", referencedColumnName="id")
     * })
     */
    private $idPresentacion;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlSubgrupo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlSubgrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_subgrupo", referencedColumnName="id")
     * })
     */
    private $idSubgrupo;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlMarca
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlMarca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marca", referencedColumnName="id")
     * })
     */
    private $idMarca;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlGrupo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id")
     * })
     */
    private $idGrupo;

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
     * @var \Ninfac\ContaBundle\Entity\CtlPuntoVenta
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlPuntoVenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_punto_venta", referencedColumnName="id")
     * })
     */
    private $idPuntoVenta;



    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return CtlProducto
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
     * @return CtlProducto
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
     * Set exento
     *
     * @param boolean $exento
     *
     * @return CtlProducto
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
     * Set minimo
     *
     * @param string $minimo
     *
     * @return CtlProducto
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return string
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set maximo
     *
     * @param string $maximo
     *
     * @return CtlProducto
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;

        return $this;
    }

    /**
     * Get maximo
     *
     * @return string
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * Set enPromocion
     *
     * @param boolean $enPromocion
     *
     * @return CtlProducto
     */
    public function setEnPromocion($enPromocion)
    {
        $this->enPromocion = $enPromocion;

        return $this;
    }

    /**
     * Get enPromocion
     *
     * @return boolean
     */
    public function getEnPromocion()
    {
        return $this->enPromocion;
    }

    /**
     * Set noSujeto
     *
     * @param boolean $noSujeto
     *
     * @return CtlProducto
     */
    public function setNoSujeto($noSujeto)
    {
        $this->noSujeto = $noSujeto;

        return $this;
    }

    /**
     * Get noSujeto
     *
     * @return boolean
     */
    public function getNoSujeto()
    {
        return $this->noSujeto;
    }

    /**
     * Set pistola
     *
     * @param boolean $pistola
     *
     * @return CtlProducto
     */
    public function setPistola($pistola)
    {
        $this->pistola = $pistola;

        return $this;
    }

    /**
     * Get pistola
     *
     * @return boolean
     */
    public function getPistola()
    {
        return $this->pistola;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return CtlProducto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return CtlProducto
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
     * @return CtlProducto
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
     * @return CtlProducto
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
     * @return CtlProducto
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
     * @return CtlProducto
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
     * Set idPresentacion
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPresentacion $idPresentacion
     *
     * @return CtlProducto
     */
    public function setIdPresentacion(\Ninfac\ContaBundle\Entity\CtlPresentacion $idPresentacion = null)
    {
        $this->idPresentacion = $idPresentacion;

        return $this;
    }

    /**
     * Get idPresentacion
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPresentacion
     */
    public function getIdPresentacion()
    {
        return $this->idPresentacion;
    }

    /**
     * Set idSubgrupo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlSubgrupo $idSubgrupo
     *
     * @return CtlProducto
     */
    public function setIdSubgrupo(\Ninfac\ContaBundle\Entity\CtlSubgrupo $idSubgrupo = null)
    {
        $this->idSubgrupo = $idSubgrupo;

        return $this;
    }

    /**
     * Get idSubgrupo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlSubgrupo
     */
    public function getIdSubgrupo()
    {
        return $this->idSubgrupo;
    }

    /**
     * Set idMarca
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMarca $idMarca
     *
     * @return CtlProducto
     */
    public function setIdMarca(\Ninfac\ContaBundle\Entity\CtlMarca $idMarca = null)
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    /**
     * Get idMarca
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMarca
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Set idGrupo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlGrupo $idGrupo
     *
     * @return CtlProducto
     */
    public function setIdGrupo(\Ninfac\ContaBundle\Entity\CtlGrupo $idGrupo = null)
    {
        $this->idGrupo = $idGrupo;

        return $this;
    }

    /**
     * Get idGrupo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlGrupo
     */
    public function getIdGrupo()
    {
        return $this->idGrupo;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return CtlProducto
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
     * Set idPuntoVenta
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPuntoVenta $idPuntoVenta
     *
     * @return CtlProducto
     */
    public function setIdPuntoVenta(\Ninfac\ContaBundle\Entity\CtlPuntoVenta $idPuntoVenta = null)
    {
        $this->idPuntoVenta = $idPuntoVenta;

        return $this;
    }

    /**
     * Get idPuntoVenta
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPuntoVenta
     */
    public function getIdPuntoVenta()
    {
        return $this->idPuntoVenta;
    }
}
