<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipopartida
 *
 * @ORM\Table(name="ctl_tipopartida", indexes={@ORM\Index(name="IDX_3394E802B2B0C0A", columns={"id_formapartida"}), @ORM\Index(name="IDX_3394E80664AF320", columns={"id_empresa"})})
 * @ORM\Entity
 */
class CtlTipopartida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=true)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipopartida_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlEmpresa
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlFormapartida
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlFormapartida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formapartida", referencedColumnName="id")
     * })
     */
    private $idFormapartida;



    /**
     * Set anio
     *
     * @param integer $anio
     *
     * @return CtlTipopartida
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlTipopartida
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
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return CtlTipopartida
     */
    public function setIdEmpresa(\Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \Ninfac\ContaBundle\Entity\CtlEmpresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idFormapartida
     *
     * @param \Ninfac\ContaBundle\Entity\CtlFormapartida $idFormapartida
     *
     * @return CtlTipopartida
     */
    public function setIdFormapartida(\Ninfac\ContaBundle\Entity\CtlFormapartida $idFormapartida = null)
    {
        $this->idFormapartida = $idFormapartida;

        return $this;
    }

    /**
     * Get idFormapartida
     *
     * @return \Ninfac\ContaBundle\Entity\CtlFormapartida
     */
    public function getIdFormapartida()
    {
        return $this->idFormapartida;
    }
}
