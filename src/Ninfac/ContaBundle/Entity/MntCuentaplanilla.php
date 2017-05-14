<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCuentaplanilla
 *
 * @ORM\Table(name="mnt_cuentaplanilla", indexes={@ORM\Index(name="IDX_308091637A999646", columns={"id_tipoafecta"}), @ORM\Index(name="IDX_308091639F541514", columns={"id_tipoexpresa"}), @ORM\Index(name="IDX_30809163B803F873", columns={"id_tipoingreso"})})
 * @ORM\Entity
 */
class MntCuentaplanilla
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=40, nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expresado", type="boolean", nullable=true)
     */
    private $expresado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descuento_isss", type="boolean", nullable=true)
     */
    private $descuentoIsss;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descuento_afp", type="boolean", nullable=true)
     */
    private $descuentoAfp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="descuento_renta", type="boolean", nullable=true)
     */
    private $descuentoRenta;

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
     * @ORM\SequenceGenerator(sequenceName="mnt_cuentaplanilla_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipoingreso
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipoingreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoingreso", referencedColumnName="id")
     * })
     */
    private $idTipoingreso;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipoexpresa
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipoexpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoexpresa", referencedColumnName="id")
     * })
     */
    private $idTipoexpresa;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipoafecta
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipoafecta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoafecta", referencedColumnName="id")
     * })
     */
    private $idTipoafecta;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return MntCuentaplanilla
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set expresado
     *
     * @param boolean $expresado
     *
     * @return MntCuentaplanilla
     */
    public function setExpresado($expresado)
    {
        $this->expresado = $expresado;

        return $this;
    }

    /**
     * Get expresado
     *
     * @return boolean
     */
    public function getExpresado()
    {
        return $this->expresado;
    }

    /**
     * Set descuentoIsss
     *
     * @param boolean $descuentoIsss
     *
     * @return MntCuentaplanilla
     */
    public function setDescuentoIsss($descuentoIsss)
    {
        $this->descuentoIsss = $descuentoIsss;

        return $this;
    }

    /**
     * Get descuentoIsss
     *
     * @return boolean
     */
    public function getDescuentoIsss()
    {
        return $this->descuentoIsss;
    }

    /**
     * Set descuentoAfp
     *
     * @param boolean $descuentoAfp
     *
     * @return MntCuentaplanilla
     */
    public function setDescuentoAfp($descuentoAfp)
    {
        $this->descuentoAfp = $descuentoAfp;

        return $this;
    }

    /**
     * Get descuentoAfp
     *
     * @return boolean
     */
    public function getDescuentoAfp()
    {
        return $this->descuentoAfp;
    }

    /**
     * Set descuentoRenta
     *
     * @param boolean $descuentoRenta
     *
     * @return MntCuentaplanilla
     */
    public function setDescuentoRenta($descuentoRenta)
    {
        $this->descuentoRenta = $descuentoRenta;

        return $this;
    }

    /**
     * Get descuentoRenta
     *
     * @return boolean
     */
    public function getDescuentoRenta()
    {
        return $this->descuentoRenta;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return MntCuentaplanilla
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
     * @return MntCuentaplanilla
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
     * @return MntCuentaplanilla
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
     * @return MntCuentaplanilla
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
     * Set idTipoingreso
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoingreso $idTipoingreso
     *
     * @return MntCuentaplanilla
     */
    public function setIdTipoingreso(\Ninfac\ContaBundle\Entity\CtlTipoingreso $idTipoingreso = null)
    {
        $this->idTipoingreso = $idTipoingreso;

        return $this;
    }

    /**
     * Get idTipoingreso
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoingreso
     */
    public function getIdTipoingreso()
    {
        return $this->idTipoingreso;
    }

    /**
     * Set idTipoexpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoexpresa $idTipoexpresa
     *
     * @return MntCuentaplanilla
     */
    public function setIdTipoexpresa(\Ninfac\ContaBundle\Entity\CtlTipoexpresa $idTipoexpresa = null)
    {
        $this->idTipoexpresa = $idTipoexpresa;

        return $this;
    }

    /**
     * Get idTipoexpresa
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoexpresa
     */
    public function getIdTipoexpresa()
    {
        return $this->idTipoexpresa;
    }

    /**
     * Set idTipoafecta
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoafecta $idTipoafecta
     *
     * @return MntCuentaplanilla
     */
    public function setIdTipoafecta(\Ninfac\ContaBundle\Entity\CtlTipoafecta $idTipoafecta = null)
    {
        $this->idTipoafecta = $idTipoafecta;

        return $this;
    }

    /**
     * Get idTipoafecta
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoafecta
     */
    public function getIdTipoafecta()
    {
        return $this->idTipoafecta;
    }
}
