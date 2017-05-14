<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlActivo
 *
 * @ORM\Table(name="ctl_activo", indexes={@ORM\Index(name="IDX_3CC5DDC996F5D4E9", columns={"id_proveedor"}), @ORM\Index(name="IDX_3CC5DDC982C5E39F", columns={"id_tipoactivo"})})
 * @ORM\Entity
 */
class CtlActivo
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_inventario", type="string", length=25, nullable=true)
     */
    private $numeroInventario;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_compra", type="date", nullable=false)
     */
    private $fechaCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=50, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=30, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=30, nullable=true)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="vida_util", type="integer", nullable=false)
     */
    private $vidaUtil;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_util", type="decimal", precision=12, scale=2, nullable=false)
     */
    private $valorUtil;

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
     * @ORM\SequenceGenerator(sequenceName="ctl_activo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTipoactivo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTipoactivo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoactivo", referencedColumnName="id")
     * })
     */
    private $idTipoactivo;

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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return CtlActivo
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
     * Set numeroInventario
     *
     * @param string $numeroInventario
     *
     * @return CtlActivo
     */
    public function setNumeroInventario($numeroInventario)
    {
        $this->numeroInventario = $numeroInventario;

        return $this;
    }

    /**
     * Get numeroInventario
     *
     * @return string
     */
    public function getNumeroInventario()
    {
        return $this->numeroInventario;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return CtlActivo
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     *
     * @return CtlActivo
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return CtlActivo
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return CtlActivo
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return CtlActivo
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set vidaUtil
     *
     * @param integer $vidaUtil
     *
     * @return CtlActivo
     */
    public function setVidaUtil($vidaUtil)
    {
        $this->vidaUtil = $vidaUtil;

        return $this;
    }

    /**
     * Get vidaUtil
     *
     * @return integer
     */
    public function getVidaUtil()
    {
        return $this->vidaUtil;
    }

    /**
     * Set valorUtil
     *
     * @param string $valorUtil
     *
     * @return CtlActivo
     */
    public function setValorUtil($valorUtil)
    {
        $this->valorUtil = $valorUtil;

        return $this;
    }

    /**
     * Get valorUtil
     *
     * @return string
     */
    public function getValorUtil()
    {
        return $this->valorUtil;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return CtlActivo
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
     * Set idTipoactivo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoactivo $idTipoactivo
     *
     * @return CtlActivo
     */
    public function setIdTipoactivo(\Ninfac\ContaBundle\Entity\CtlTipoactivo $idTipoactivo = null)
    {
        $this->idTipoactivo = $idTipoactivo;

        return $this;
    }

    /**
     * Get idTipoactivo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoactivo
     */
    public function getIdTipoactivo()
    {
        return $this->idTipoactivo;
    }

    /**
     * Set idProveedor
     *
     * @param \Ninfac\ContaBundle\Entity\MntProveedor $idProveedor
     *
     * @return CtlActivo
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
}
