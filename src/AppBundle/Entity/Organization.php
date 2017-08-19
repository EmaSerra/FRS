<?php

namespace AppBundle\Entity;

/**
 * Organization
 */
class Organization
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projects;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $donations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->donations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Organization
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
     * Add project
     *
     * @param \AppBundle\Entity\Project $project
     *
     * @return Organization
     */
    public function addProject(\AppBundle\Entity\Project $project)
    {
        $this->projects[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \AppBundle\Entity\Project $project
     */
    public function removeProject(\AppBundle\Entity\Project $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Add donation
     *
     * @param \AppBundle\Entity\Donation $donation
     *
     * @return Organization
     */
    public function addDonation(\AppBundle\Entity\Donation $donation)
    {
        $this->donations[] = $donation;

        return $this;
    }

    /**
     * Remove donation
     *
     * @param \AppBundle\Entity\Donation $donation
     */
    public function removeDonation(\AppBundle\Entity\Donation $donation)
    {
        $this->donations->removeElement($donation);
    }

    /**
     * Get donations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDonations()
    {
        return $this->donations;
    }
}

