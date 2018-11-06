<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMotivoMovimiento
 *
 * @ORM\Table(name="ctl_motivo_movimiento", uniqueConstraints={@ORM\UniqueConstraint(name="uk_tipo_movimiento", columns={"id_tipo_movimiento", "nombre"})}, indexes={@ORM\Index(name="IDX_C9B74DA2B027D1DA", columns={"id_tipo_movimiento"})})
 * @ORM\Entity
 */
class CtlMotivoMovimiento {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_motivo_movimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var \CtlTipoMovimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoMovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_movimiento", referencedColumnName="id")
     * })
     */
    private $idTipoMovimiento;

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
     * @return CtlMotivoMovimiento
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
     * @return CtlMotivoMovimiento
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
     * Set idTipoMovimiento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTipoMovimiento $idTipoMovimiento
     *
     * @return CtlMotivoMovimiento
     */
    public function setIdTipoMovimiento(\Ninfac\ContaBundle\Entity\CtlTipoMovimiento $idTipoMovimiento = null) {
        $this->idTipoMovimiento = $idTipoMovimiento;

        return $this;
    }

    /**
     * Get idTipoMovimiento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTipoMovimiento
     */
    public function getIdTipoMovimiento() {
        return $this->idTipoMovimiento;
    }

    public function __toString() {
        return (string) $this->nombre;
    }

}
