<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvAbonosCxp
 *
 * @ORM\Table(name="inv_abonos_cxp", indexes={@ORM\Index(name="IDX_902A5EAA664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_902A5EAA96F5D4E9", columns={"id_proveedor"}), @ORM\Index(name="IDX_902A5EAA995BA0E1", columns={"id_banco"}), @ORM\Index(name="IDX_902A5EAA4B41C0C4", columns={"id_inventario_referencia"})})
 * @ORM\Entity
 */
class InvAbonosCxp
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=100, nullable=true)
     */
    private $comentario;

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
     * @ORM\SequenceGenerator(sequenceName="inv_abonos_cxp_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\InvInventario
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\InvInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario_referencia", referencedColumnName="id")
     * })
     */
    private $idInventarioReferencia;

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
     * @var \Ninfac\ContaBundle\Entity\MntProveedor
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\MntProveedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proveedor", referencedColumnName="id")
     * })
     */
    private $idProveedor;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return InvAbonosCxp
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set monto
     *
     * @param string $monto
     *
     * @return InvAbonosCxp
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return InvAbonosCxp
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
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return InvAbonosCxp
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
     * @return InvAbonosCxp
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
     * @return InvAbonosCxp
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
     * @return InvAbonosCxp
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
     * Set idInventarioReferencia
     *
     * @param \Ninfac\ContaBundle\Entity\InvInventario $idInventarioReferencia
     *
     * @return InvAbonosCxp
     */
    public function setIdInventarioReferencia(\Ninfac\ContaBundle\Entity\InvInventario $idInventarioReferencia = null)
    {
        $this->idInventarioReferencia = $idInventarioReferencia;

        return $this;
    }

    /**
     * Get idInventarioReferencia
     *
     * @return \Ninfac\ContaBundle\Entity\InvInventario
     */
    public function getIdInventarioReferencia()
    {
        return $this->idInventarioReferencia;
    }

    /**
     * Set idBanco
     *
     * @param \Ninfac\ContaBundle\Entity\CtlBanco $idBanco
     *
     * @return InvAbonosCxp
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
     * Set idProveedor
     *
     * @param \Ninfac\ContaBundle\Entity\MntProveedor $idProveedor
     *
     * @return InvAbonosCxp
     */
    public function setIdProveedor(\Ninfac\ContaBundle\Entity\MntProveedor $idProveedor = null)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return \Ninfac\ContaBundle\Entity\MntProveedor
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return InvAbonosCxp
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
