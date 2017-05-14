<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlOficina
 *
 * @ORM\Table(name="ctl_oficina", indexes={@ORM\Index(name="IDX_F36D8D3FF8B09C83", columns={"id_centrotrabajo"})})
 * @ORM\Entity
 */
class CtlOficina
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_oficina_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlCentrotrabajo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlCentrotrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centrotrabajo", referencedColumnName="id")
     * })
     */
    private $idCentrotrabajo;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlOficina
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCentrotrabajo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlCentrotrabajo $idCentrotrabajo
     *
     * @return CtlOficina
     */
    public function setIdCentrotrabajo(\Ninfac\ContaBundle\Entity\CtlCentrotrabajo $idCentrotrabajo = null)
    {
        $this->idCentrotrabajo = $idCentrotrabajo;

        return $this;
    }

    /**
     * Get idCentrotrabajo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlCentrotrabajo
     */
    public function getIdCentrotrabajo()
    {
        return $this->idCentrotrabajo;
    }
}
