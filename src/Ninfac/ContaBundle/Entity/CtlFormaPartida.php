<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlFormaPartida
 *
 * @ORM\Table(name="ctl_forma_partida")
 * @ORM\Entity
 */
class CtlFormaPartida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_forma_partida_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=true)
     */
    private $nombre;

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
     * @return CtlFormaPartida
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
    
    public function __toString() {
        return (string)$this->nombre;
    }

    
}
