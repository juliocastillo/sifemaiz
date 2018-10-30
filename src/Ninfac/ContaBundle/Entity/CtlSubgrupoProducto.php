<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSubgrupoProducto
 *
 * @ORM\Table(name="ctl_subgrupo_producto", indexes={@ORM\Index(name="IDX_774CD2F6628BDAE3", columns={"id_grupo"})})
 * @ORM\Entity
 */
class CtlSubgrupoProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_subgrupo_producto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var \CtlGrupoProducto
     *
     * @ORM\ManyToOne(targetEntity="CtlGrupoProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id")
     * })
     */
    private $idGrupo;



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
     * @return CtlSubgrupoProducto
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return CtlSubgrupoProducto
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
     * Set idGrupo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlGrupoProducto $idGrupo
     *
     * @return CtlSubgrupoProducto
     */
    public function setIdGrupo(\Ninfac\ContaBundle\Entity\CtlGrupoProducto $idGrupo = null)
    {
        $this->idGrupo = $idGrupo;

        return $this;
    }

    /**
     * Get idGrupo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlGrupoProducto
     */
    public function getIdGrupo()
    {
        return $this->idGrupo;
    }
    
    public function __toString() {
        return $this->nombre;
    }
    
    
}
