<?php

namespace AppBundle\Entity;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Benefactor
     */
    private $benefactor;

    /**
     * @var \AppBundle\Entity\Organization
     */
    private $organization;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $staff;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->staff = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set benefactor
     *
     * @param \AppBundle\Entity\Benefactor $benefactor
     *
     * @return Project
     */
    public function setBenefactor(\AppBundle\Entity\Benefactor $benefactor = null)
    {
        $this->benefactor = $benefactor;

        return $this;
    }

    /**
     * Get benefactor
     *
     * @return \AppBundle\Entity\Benefactor
     */
    public function getBenefactor()
    {
        return $this->benefactor;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Project
     */
    public function setOrganization(\AppBundle\Entity\Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \AppBundle\Entity\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Add staff
     *
     * @param \AppBundle\Entity\Staff $staff
     *
     * @return Project
     */
    public function addStaff(\AppBundle\Entity\Staff $staff)
    {
        $this->staff[] = $staff;

        return $this;
    }

    /**
     * Remove staff
     *
     * @param \AppBundle\Entity\Staff $staff
     */
    public function removeStaff(\AppBundle\Entity\Staff $staff)
    {
        $this->staff->removeElement($staff);
    }

    /**
     * Get staff
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStaff()
    {
        return $this->staff;
    }
}

