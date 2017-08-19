<?php

namespace AppBundle\Entity;

/**
 * Donor
 */
class Donor
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
    private $donations;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set profile
     *
     * @param \AppBundle\Entity\Profile $profile
     *
     * @return Donor
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
     * Add donation
     *
     * @param \AppBundle\Entity\Donation $donation
     *
     * @return Donor
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

