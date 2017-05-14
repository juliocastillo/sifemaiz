<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlDepartamento
 *
 * @ORM\Table(name="ctl_departamento", indexes={@ORM\Index(name="IDX_C3F1602BF57D32FD", columns={"id_pais"})})
 * @ORM\Entity
 */
class CtlDepartamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_departamento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlPais
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlDepartamento
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
     * Set idPais
     *
     * @param \Ninfac\ContaBundle\Entity\CtlPais $idPais
     *
     * @return CtlDepartamento
     */
    public function setIdPais(\Ninfac\ContaBundle\Entity\CtlPais $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \Ninfac\ContaBundle\Entity\CtlPais
     */
    public function getIdPais()
    {
        return $this->idPais;
    }
}
