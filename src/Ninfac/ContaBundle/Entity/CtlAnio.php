<?php

namespace Ninfac\ContaBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAnio
 *
 * @ORM\Table(name="ctl_anio", uniqueConstraints={@ORM\UniqueConstraint(name="uk_anio", columns={"nombre"})})
 * @ORM\Entity
 * @UniqueEntity(
 *      fields={"nombre"},
 *      message="Ya existe este año."
 * )
 */
class CtlAnio {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_anio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=4, nullable=true)
     */
    private $nombre;

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
     * @return CtlAnio
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

    public function __toString() {
        return (string)$this->nombre;
    }

}
