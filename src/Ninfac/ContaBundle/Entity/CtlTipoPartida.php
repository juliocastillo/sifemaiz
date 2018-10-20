<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipoPartida
 *
 * @ORM\Table(name="ctl_tipo_partida", indexes={@ORM\Index(name="IDX_392D8E6C3468F610", columns={"id_forma_partida"})})
 * @ORM\Entity
 */
class CtlTipoPartida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipo_partida_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=false)
     */
    private $nombre;

    /**
     * @var \CtlFormaPartida
     *
     * @ORM\ManyToOne(targetEntity="CtlFormaPartida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forma_partida", referencedColumnName="id", nullable=false)
     * })
     */
    private $idFormaPartida;



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
     * @return CtlTipoPartida
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
     * Set idFormaPartida
     *
     * @param \Ninfac\ContaBundle\Entity\CtlFormaPartida $idFormaPartida
     *
     * @return CtlTipoPartida
     */
    public function setIdFormaPartida(\Ninfac\ContaBundle\Entity\CtlFormaPartida $idFormaPartida = null)
    {
        $this->idFormaPartida = $idFormaPartida;

        return $this;
    }

    /**
     * Get idFormaPartida
     *
     * @return \Ninfac\ContaBundle\Entity\CtlFormaPartida
     */
    public function getIdFormaPartida()
    {
        return $this->idFormaPartida;
    }
    
    public function __toString() {
        return $this->nombre ? (string) $this->nombre : '';
    }
}
