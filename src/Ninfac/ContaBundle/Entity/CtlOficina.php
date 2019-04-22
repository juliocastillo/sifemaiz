<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlOficina
 *
 * @ORM\Table(name="ctl_oficina", indexes={@ORM\Index(name="IDX_F36D8D3FF8B09C83", columns={"id_centrotrabajo"})})
 * @ORM\Entity
 */
class CtlOficina {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_oficina_id_seq", allocationSize=1, initialValue=1)
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
     * @var \CtlCentrotrabajo
     *
     * @ORM\ManyToOne(targetEntity="CtlCentrotrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centrotrabajo", referencedColumnName="id")
     * })
     */
    private $idCentrotrabajo;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlOficina
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return CtlOficina
     */
    public function setActivo($activo) {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo() {
        return $this->activo;
    }

    /**
     * Set idCentrotrabajo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCentrotrabajo $idCentrotrabajo
     *
     * @return CtlOficina
     */
    public function setIdCentrotrabajo(\Ninfac\ContaBundle\Entity\CtlCentrotrabajo $idCentrotrabajo = null) {
        $this->idCentrotrabajo = $idCentrotrabajo;

        return $this;
    }

    /**
     * Get idCentrotrabajo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCentrotrabajo
     */
    public function getIdCentrotrabajo() {
        return $this->idCentrotrabajo;
    }

    public function __toString() {
        return (string) $this->nombre;
    }

}
