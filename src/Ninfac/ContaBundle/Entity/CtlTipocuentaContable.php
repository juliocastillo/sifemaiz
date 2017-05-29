<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipocuentaContable
 *
 * @ORM\Table(name="ctl_tipocuenta_contable", indexes={@ORM\Index(name="IDX_7754F913DE7E3", columns={"id_tipocontable"})})
 * @ORM\Entity
 */
class CtlTipocuentaContable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipocuenta_contable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var \CtlTipocontable
     *
     * @ORM\ManyToOne(targetEntity="CtlTipocontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocontable", referencedColumnName="id")
     * })
     */
    private $idTipocontable;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlTipocuentaContable
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
     * Set idTipocontable
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipocontable $idTipocontable
     *
     * @return CtlTipocuentaContable
     */
    public function setIdTipocontable(\Ninfac\ContaBundle\Entity\CtlTipocontable $idTipocontable = null)
    {
        $this->idTipocontable = $idTipocontable;

        return $this;
    }

    /**
     * Get idTipocontable
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipocontable
     */
    public function getIdTipocontable()
    {
        return $this->idTipocontable;
    }
}
