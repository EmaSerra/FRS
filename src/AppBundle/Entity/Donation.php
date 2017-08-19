<?php

namespace AppBundle\Entity;

/**
 * Donation
 */
class Donation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Movement
     */
    private $movement;

    /**
     * @var \AppBundle\Entity\Donor
     */
    private $donor;

    /**
     * @var \AppBundle\Entity\Campaign
     */
    private $campaign;

    /**
     * @var \AppBundle\Entity\Organization
     */
    private $organization;


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
     * Set movement
     *
     * @param \AppBundle\Entity\Movement $movement
     *
     * @return Donation
     */
    public function setMovement(\AppBundle\Entity\Movement $movement = null)
    {
        $this->movement = $movement;

        return $this;
    }

    /**
     * Get movement
     *
     * @return \AppBundle\Entity\Movement
     */
    public function getMovement()
    {
        return $this->movement;
    }

    /**
     * Set donor
     *
     * @param \AppBundle\Entity\Donor $donor
     *
     * @return Donation
     */
    public function setDonor(\AppBundle\Entity\Donor $donor = null)
    {
        $this->donor = $donor;

        return $this;
    }

    /**
     * Get donor
     *
     * @return \AppBundle\Entity\Donor
     */
    public function getDonor()
    {
        return $this->donor;
    }

    /**
     * Set campaign
     *
     * @param \AppBundle\Entity\Campaign $campaign
     *
     * @return Donation
     */
    public function setCampaign(\AppBundle\Entity\Campaign $campaign = null)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return \AppBundle\Entity\Campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     *
     * @return Donation
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
}

