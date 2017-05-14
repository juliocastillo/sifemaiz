<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSubgrupo
 *
 * @ORM\Table(name="ctl_subgrupo", indexes={@ORM\Index(name="IDX_9F4D98DF628BDAE3", columns={"id_grupo"})})
 * @ORM\Entity
 */
class CtlSubgrupo
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
     * @ORM\SequenceGenerator(sequenceName="ctl_subgrupo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlGrupo
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id")
     * })
     */
    private $idGrupo;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlSubgrupo
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
     * Set idGrupo
     *
     * @param \Ninfac\ContaBundle\Entity\CtlGrupo $idGrupo
     *
     * @return CtlSubgrupo
     */
    public function setIdGrupo(\Ninfac\ContaBundle\Entity\CtlGrupo $idGrupo = null)
    {
        $this->idGrupo = $idGrupo;

        return $this;
    }

    /**
     * Get idGrupo
     *
     * @return \Ninfac\ContaBundle\Entity\CtlGrupo
     */
    public function getIdGrupo()
    {
        return $this->idGrupo;
    }
}
