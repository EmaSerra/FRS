<?php

namespace AppBundle\Entity;

/**
 * Movement
 */
class Movement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Donation
     */
    private $donation;


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
     * Set donation
     *
     * @param \AppBundle\Entity\Donation $donation
     *
     * @return Movement
     */
    public function setDonation(\AppBundle\Entity\Donation $donation = null)
    {
        $this->donation = $donation;

        return $this;
    }

    /**
     * Get donation
     *
     * @return \AppBundle\Entity\Donation
     */
    public function getDonation()
    {
        return $this->donation;
    }
}

