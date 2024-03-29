<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\TrainTravel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TrainTravel
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date $implementation_date
     *
     * @ORM\Column(name="implementation_date", type="date")
     */
    private $implementation_date;

    /**
     * @var date $expiration_date
     *
     * @ORM\Column(name="expiration_date", type="date")
     */
    private $expiration_date;
    
    /**
     * @ORM\OneToMany(targetEntity="Popolitinero\DefaultBundle\Entity\TrainStep", mappedBy="trainTravel")
     *
     * @var ArrayCollection $steps
     */
    protected $steps;


    public function __construct()
    {
        $this->steps = new ArrayCollection();
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
     * Set implementation_date
     *
     * @param date $implementationDate
     */
    public function setImplementationDate($implementationDate)
    {
        $this->implementation_date = $implementationDate;
    }

    /**
     * Get implementation_date
     *
     * @return date 
     */
    public function getImplementationDate()
    {
        return $this->implementation_date;
    }

    /**
     * Set expiration_date
     *
     * @param date $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expiration_date = $expirationDate;
    }

    /**
     * Get expiration_date
     *
     * @return date 
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * Add steps
     *
     * @param Popolitinero\DefaultBundle\Entity\TrainStep $steps
     */
    public function addTrainStep(\Popolitinero\DefaultBundle\Entity\TrainStep $steps)
    {
        $this->steps[] = $steps;
    }

    /**
     * Get steps
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSteps()
    {
        return $this->steps;
    }
}