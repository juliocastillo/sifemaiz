<?php

namespace Ninfac\ContaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclEntries
 *
 * @ORM\Table(name="acl_entries", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_46c8b806ea000b103d9ab4a64def17bce4289bf4", columns={"class_id", "object_identity_id", "field_name", "ace_order"})}, indexes={@ORM\Index(name="idx_46c8b806ea000b10", columns={"class_id"}), @ORM\Index(name="idx_46c8b806df9183c9", columns={"security_identity_id"}), @ORM\Index(name="idx_46c8b8063d9ab4a6", columns={"object_identity_id"}), @ORM\Index(name="idx_46c8b806ea000b103d9ab4a6df9183c9", columns={"class_id", "object_identity_id", "security_identity_id"})})
 * @ORM\Entity
 */
class AclEntries
{
    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=50, nullable=true)
     */
    private $fieldName;

    /**
     * @var integer
     *
     * @ORM\Column(name="ace_order", type="smallint", nullable=false)
     */
    private $aceOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="mask", type="integer", nullable=false)
     */
    private $mask;

    /**
     * @var boolean
     *
     * @ORM\Column(name="granting", type="boolean", nullable=false)
     */
    private $granting;

    /**
     * @var string
     *
     * @ORM\Column(name="granting_strategy", type="string", length=30, nullable=false)
     */
    private $grantingStrategy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="audit_success", type="boolean", nullable=false)
     */
    private $auditSuccess;

    /**
     * @var boolean
     *
     * @ORM\Column(name="audit_failure", type="boolean", nullable=false)
     */
    private $auditFailure;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="acl_entries_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Ninfac\ContaBundle\Entity\AclSecurityIdentities
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\AclSecurityIdentities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="security_identity_id", referencedColumnName="id")
     * })
     */
    private $securityentity;

    /**
     * @var \Ninfac\ContaBundle\Entity\AclObjectIdentities
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\AclObjectIdentities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_identity_id", referencedColumnName="id")
     * })
     */
    private $objectentity;

    /**
     * @var \Ninfac\ContaBundle\Entity\AclClasses
     *
     * @ORM\ManyToOne(targetEntity="Ninfac\ContaBundle\Entity\AclClasses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_id", referencedColumnName="id")
     * })
     */
    private $class;



    /**
     * Set fieldName
     *
     * @param string $fieldName
     *
     * @return AclEntries
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set aceOrder
     *
     * @param integer $aceOrder
     *
     * @return AclEntries
     */
    public function setAceOrder($aceOrder)
    {
        $this->aceOrder = $aceOrder;

        return $this;
    }

    /**
     * Get aceOrder
     *
     * @return integer
     */
    public function getAceOrder()
    {
        return $this->aceOrder;
    }

    /**
     * Set mask
     *
     * @param integer $mask
     *
     * @return AclEntries
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask
     *
     * @return integer
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set granting
     *
     * @param boolean $granting
     *
     * @return AclEntries
     */
    public function setGranting($granting)
    {
        $this->granting = $granting;

        return $this;
    }

    /**
     * Get granting
     *
     * @return boolean
     */
    public function getGranting()
    {
        return $this->granting;
    }

    /**
     * Set grantingStrategy
     *
     * @param string $grantingStrategy
     *
     * @return AclEntries
     */
    public function setGrantingStrategy($grantingStrategy)
    {
        $this->grantingStrategy = $grantingStrategy;

        return $this;
    }

    /**
     * Get grantingStrategy
     *
     * @return string
     */
    public function getGrantingStrategy()
    {
        return $this->grantingStrategy;
    }

    /**
     * Set auditSuccess
     *
     * @param boolean $auditSuccess
     *
     * @return AclEntries
     */
    public function setAuditSuccess($auditSuccess)
    {
        $this->auditSuccess = $auditSuccess;

        return $this;
    }

    /**
     * Get auditSuccess
     *
     * @return boolean
     */
    public function getAuditSuccess()
    {
        return $this->auditSuccess;
    }

    /**
     * Set auditFailure
     *
     * @param boolean $auditFailure
     *
     * @return AclEntries
     */
    public function setAuditFailure($auditFailure)
    {
        $this->auditFailure = $auditFailure;

        return $this;
    }

    /**
     * Get auditFailure
     *
     * @return boolean
     */
    public function getAuditFailure()
    {
        return $this->auditFailure;
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
     * Set securityentity
     *
     * @param \Ninfac\ContaBundle\Entity\AclSecurityIdentities $securityentity
     *
     * @return AclEntries
     */
    public function setSecurityentity(\Ninfac\ContaBundle\Entity\AclSecurityIdentities $securityentity = null)
    {
        $this->securityentity = $securityentity;

        return $this;
    }

    /**
     * Get securityentity
     *
     * @return \Ninfac\ContaBundle\Entity\AclSecurityIdentities
     */
    public function getSecurityentity()
    {
        return $this->securityentity;
    }

    /**
     * Set objectentity
     *
     * @param \Ninfac\ContaBundle\Entity\AclObjectIdentities $objectentity
     *
     * @return AclEntries
     */
    public function setObjectentity(\Ninfac\ContaBundle\Entity\AclObjectIdentities $objectentity = null)
    {
        $this->objectentity = $objectentity;

        return $this;
    }

    /**
     * Get objectentity
     *
     * @return \Ninfac\ContaBundle\Entity\AclObjectIdentities
     */
    public function getObjectentity()
    {
        return $this->objectentity;
    }

    /**
     * Set class
     *
     * @param \Ninfac\ContaBundle\Entity\AclClasses $class
     *
     * @return AclEntries
     */
    public function setClass(\Ninfac\ContaBundle\Entity\AclClasses $class = null)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return \Ninfac\ContaBundle\Entity\AclClasses
     */
    public function getClass()
    {
        return $this->class;
    }
}
