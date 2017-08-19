<?php

namespace AppBundle\Entity;

/**
 * Staff
 */
class Staff
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Profile
     */
    private $profile;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projects;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $campaigns;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->campaigns = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set profile
     *
     * @param \AppBundle\Entity\Profile $profile
     *
     * @return Staff
     */
    public function setProfile(\AppBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \AppBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Add project
     *
     * @param \AppBundle\Entity\Project $project
     *
     * @return Staff
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
     * Add campaign
     *
     * @param \AppBundle\Entity\Campaign $campaign
     *
     * @return Staff
     */
    public function addCampaign(\AppBundle\Entity\Campaign $campaign)
    {
        $this->campaigns[] = $campaign;

        return $this;
    }

    /**
     * Remove campaign
     *
     * @param \AppBundle\Entity\Campaign $campaign
     */
    public function removeCampaign(\AppBundle\Entity\Campaign $campaign)
    {
        $this->campaigns->removeElement($campaign);
    }

    /**
     * Get campaigns
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }
}

