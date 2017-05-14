<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntPrecioProductoTipoprecio
 *
 * @ORM\Table(name="mnt_precio_producto_tipoprecio", indexes={@ORM\Index(name="IDX_AB2F658BF760EA80", columns={"id_producto"}), @ORM\Index(name="IDX_AB2F658B3FA73721", columns={"id_tipoprecio"})})
 * @ORM\Entity
 */
class MntPrecioProductoTipoprecio
{
    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $precio;

    /**
     * @var integer
     *
     * @ORM\Column(name="porcentaje_descuento", type="integer", nullable=true)
     */
    private $porcentajeDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_fijo_minimo", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $precioFijoMinimo;

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
     * @ORM\SequenceGenerator(sequenceName="mnt_precio_producto_tipoprecio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Ninfac\ContaBundle\Entity\CtlProducto
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     * })
     */
    private $idProducto;



    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return MntPrecioProductoTipoprecio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set porcentajeDescuento
     *
     * @param integer $porcentajeDescuento
     *
     * @return MntPrecioProductoTipoprecio
     */
    public function setPorcentajeDescuento($porcentajeDescuento)
    {
        $this->porcentajeDescuento = $porcentajeDescuento;

        return $this;
    }

    /**
     * Get porcentajeDescuento
     *
     * @return integer
     */
    public function getPorcentajeDescuento()
    {
        return $this->porcentajeDescuento;
    }

    /**
     * Set precioFijoMinimo
     *
     * @param string $precioFijoMinimo
     *
     * @return MntPrecioProductoTipoprecio
     */
    public function setPrecioFijoMinimo($precioFijoMinimo)
    {
        $this->precioFijoMinimo = $precioFijoMinimo;

        return $this;
    }

    /**
     * Get precioFijoMinimo
     *
     * @return string
     */
    public function getPrecioFijoMinimo()
    {
        return $this->precioFijoMinimo;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return MntPrecioProductoTipoprecio
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
     * @return MntPrecioProductoTipoprecio
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
     * @return MntPrecioProductoTipoprecio
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
     * @return MntPrecioProductoTipoprecio
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
     * Set idTipoprecio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoprecio $idTipoprecio
     *
     * @return MntPrecioProductoTipoprecio
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
     * Set idProducto
     *
     * @param \Ninfac\ContaBundle\Entity\CtlProducto $idProducto
     *
     * @return MntPrecioProductoTipoprecio
     */
    public function setIdProducto(\Ninfac\ContaBundle\Entity\CtlProducto $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \Ninfac\ContaBundle\Entity\CtlProducto
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }
}
