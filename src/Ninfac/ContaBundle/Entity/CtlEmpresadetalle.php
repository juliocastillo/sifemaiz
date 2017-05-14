<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEmpresadetalle
 *
 * @ORM\Table(name="ctl_empresadetalle", indexes={@ORM\Index(name="IDX_5C948CE6325E299", columns={"id_departamento"}), @ORM\Index(name="IDX_5C948CE664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_5C948CE7EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_5C948CEF842EB5F", columns={"id_tamanioempresa"})})
 * @ORM\Entity
 */
class CtlEmpresadetalle
{
    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=4, nullable=true)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="nit_representante", type="string", length=14, nullable=true)
     */
    private $nitRepresentante;

    /**
     * @var string
     *
     * @ORM\Column(name="representante", type="string", length=80, nullable=true)
     */
    private $representante;

    /**
     * @var string
     *
     * @ORM\Column(name="nit_auditor", type="string", length=14, nullable=true)
     */
    private $nitAuditor;

    /**
     * @var string
     *
     * @ORM\Column(name="auditor", type="string", length=80, nullable=true)
     */
    private $auditor;

    /**
     * @var string
     *
     * @ORM\Column(name="nit_contador", type="string", length=14, nullable=true)
     */
    private $nitContador;

    /**
     * @var integer
     *
     * @ORM\Column(name="contador", type="integer", nullable=true)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="nit_propietario", type="string", length=14, nullable=true)
     */
    private $nitPropietario;

    /**
     * @var string
     *
     * @ORM\Column(name="dui_propietario", type="string", length=10, nullable=true)
     */
    private $duiPropietario;

    /**
     * @var string
     *
     * @ORM\Column(name="propietario", type="string", length=80, nullable=true)
     */
    private $propietario;

    /**
     * @var integer
     *
     * @ORM\Column(name="tamanio_cta_mayor", type="smallint", nullable=true)
     */
    private $tamanioCtaMayor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_empresadetalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlTamanioempresa
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlTamanioempresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tamanioempresa", referencedColumnName="id")
     * })
     */
    private $idTamanioempresa;

    /**
     * @var \Ninfac\ContaBundle\Entity\CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

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
     * @var \Ninfac\ContaBundle\Entity\CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento", referencedColumnName="id")
     * })
     */
    private $idDepartamento;



    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return CtlEmpresadetalle
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set nitRepresentante
     *
     * @param string $nitRepresentante
     *
     * @return CtlEmpresadetalle
     */
    public function setNitRepresentante($nitRepresentante)
    {
        $this->nitRepresentante = $nitRepresentante;

        return $this;
    }

    /**
     * Get nitRepresentante
     *
     * @return string
     */
    public function getNitRepresentante()
    {
        return $this->nitRepresentante;
    }

    /**
     * Set representante
     *
     * @param string $representante
     *
     * @return CtlEmpresadetalle
     */
    public function setRepresentante($representante)
    {
        $this->representante = $representante;

        return $this;
    }

    /**
     * Get representante
     *
     * @return string
     */
    public function getRepresentante()
    {
        return $this->representante;
    }

    /**
     * Set nitAuditor
     *
     * @param string $nitAuditor
     *
     * @return CtlEmpresadetalle
     */
    public function setNitAuditor($nitAuditor)
    {
        $this->nitAuditor = $nitAuditor;

        return $this;
    }

    /**
     * Get nitAuditor
     *
     * @return string
     */
    public function getNitAuditor()
    {
        return $this->nitAuditor;
    }

    /**
     * Set auditor
     *
     * @param string $auditor
     *
     * @return CtlEmpresadetalle
     */
    public function setAuditor($auditor)
    {
        $this->auditor = $auditor;

        return $this;
    }

    /**
     * Get auditor
     *
     * @return string
     */
    public function getAuditor()
    {
        return $this->auditor;
    }

    /**
     * Set nitContador
     *
     * @param string $nitContador
     *
     * @return CtlEmpresadetalle
     */
    public function setNitContador($nitContador)
    {
        $this->nitContador = $nitContador;

        return $this;
    }

    /**
     * Get nitContador
     *
     * @return string
     */
    public function getNitContador()
    {
        return $this->nitContador;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     *
     * @return CtlEmpresadetalle
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set nitPropietario
     *
     * @param string $nitPropietario
     *
     * @return CtlEmpresadetalle
     */
    public function setNitPropietario($nitPropietario)
    {
        $this->nitPropietario = $nitPropietario;

        return $this;
    }

    /**
     * Get nitPropietario
     *
     * @return string
     */
    public function getNitPropietario()
    {
        return $this->nitPropietario;
    }

    /**
     * Set duiPropietario
     *
     * @param string $duiPropietario
     *
     * @return CtlEmpresadetalle
     */
    public function setDuiPropietario($duiPropietario)
    {
        $this->duiPropietario = $duiPropietario;

        return $this;
    }

    /**
     * Get duiPropietario
     *
     * @return string
     */
    public function getDuiPropietario()
    {
        return $this->duiPropietario;
    }

    /**
     * Set propietario
     *
     * @param string $propietario
     *
     * @return CtlEmpresadetalle
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;

        return $this;
    }

    /**
     * Get propietario
     *
     * @return string
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set tamanioCtaMayor
     *
     * @param integer $tamanioCtaMayor
     *
     * @return CtlEmpresadetalle
     */
    public function setTamanioCtaMayor($tamanioCtaMayor)
    {
        $this->tamanioCtaMayor = $tamanioCtaMayor;

        return $this;
    }

    /**
     * Get tamanioCtaMayor
     *
     * @return integer
     */
    public function getTamanioCtaMayor()
    {
        return $this->tamanioCtaMayor;
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
     * Set idTamanioempresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlTamanioempresa $idTamanioempresa
     *
     * @return CtlEmpresadetalle
     */
    public function setIdTamanioempresa(\Ninfac\ContaBundle\Entity\CtlTamanioempresa $idTamanioempresa = null)
    {
        $this->idTamanioempresa = $idTamanioempresa;

        return $this;
    }

    /**
     * Get idTamanioempresa
     *
     * @return \Ninfac\ContaBundle\Entity\CtlTamanioempresa
     */
    public function getIdTamanioempresa()
    {
        return $this->idTamanioempresa;
    }

    /**
     * Set idMunicipio
     *
     * @param \Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio
     *
     * @return CtlEmpresadetalle
     */
    public function setIdMunicipio(\Ninfac\ContaBundle\Entity\CtlMunicipio $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Ninfac\ContaBundle\Entity\CtlMunicipio
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set idEmpresa
     *
     * @param \Ninfac\ContaBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return CtlEmpresadetalle
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
     * Set idDepartamento
     *
     * @param \Ninfac\ContaBundle\Entity\CtlDepartamento $idDepartamento
     *
     * @return CtlEmpresadetalle
     */
    public function setIdDepartamento(\Ninfac\ContaBundle\Entity\CtlDepartamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \Ninfac\ContaBundle\Entity\CtlDepartamento
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
}
