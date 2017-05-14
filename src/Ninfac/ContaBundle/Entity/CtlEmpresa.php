<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEmpresa
 *
 * @ORM\Table(name="ctl_empresa")
 * @ORM\Entity
 */
class CtlEmpresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=3, nullable=true)
     */
    private $origen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="registro_fiscal", type="string", length=15, nullable=true)
     */
    private $registroFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=14, nullable=true)
     */
    private $nit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consolidadora", type="boolean", nullable=true)
     */
    private $consolidadora;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_add", type="integer", nullable=false)
     */
    private $userAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false)
     */
    private $dateAdd;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_mod", type="integer", nullable=true)
     */
    private $userMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="datetime", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_empresa_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set origen
     *
     * @param string $origen
     *
     * @return CtlEmpresa
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlEmpresa
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
     * Set registroFiscal
     *
     * @param string $registroFiscal
     *
     * @return CtlEmpresa
     */
    public function setRegistroFiscal($registroFiscal)
    {
        $this->registroFiscal = $registroFiscal;

        return $this;
    }

    /**
     * Get registroFiscal
     *
     * @return string
     */
    public function getRegistroFiscal()
    {
        return $this->registroFiscal;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return CtlEmpresa
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set consolidadora
     *
     * @param boolean $consolidadora
     *
     * @return CtlEmpresa
     */
    public function setConsolidadora($consolidadora)
    {
        $this->consolidadora = $consolidadora;

        return $this;
    }

    /**
     * Get consolidadora
     *
     * @return boolean
     */
    public function getConsolidadora()
    {
        return $this->consolidadora;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     *
     * @return CtlEmpresa
     */
    public function setUserAdd($userAdd)
    {
        $this->userAdd = $userAdd;

        return $this;
    }

    /**
     * Get userAdd
     *
     * @return integer
     */
    public function getUserAdd()
    {
        return $this->userAdd;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return CtlEmpresa
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set userMod
     *
     * @param integer $userMod
     *
     * @return CtlEmpresa
     */
    public function setUserMod($userMod)
    {
        $this->userMod = $userMod;

        return $this;
    }

    /**
     * Get userMod
     *
     * @return integer
     */
    public function getUserMod()
    {
        return $this->userMod;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     *
     * @return CtlEmpresa
     */
    public function setDateMod($dateMod)
    {
        $this->dateMod = $dateMod;

        return $this;
    }

    /**
     * Get dateMod
     *
     * @return \DateTime
     */
    public function getDateMod()
    {
        return $this->dateMod;
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
}
