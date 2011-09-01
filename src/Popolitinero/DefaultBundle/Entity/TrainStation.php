<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\TrainStation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TrainStation
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
     * @var BusStop $bus_stop
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\BusStop")
     */
    private $bus_stop;

    /**
     * @var boolean $is_wheelchair_accessible
     *
     * @ORM\Column(type="boolean")
     */
    private $is_wheelchair_accessible = false;
    
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
     * Set bus_stop
     *
     * @param BusStop $bus_stop_departure
     */
    public function setBusStop(\Popolitinero\DefaultBundle\Entity\BusStop $bus_stop)
    {
        $this->bus_stop = $bus_stop;
    }

    /**
     * Get bus_stop
     *
     * @return BusStop $bus_stop
     */
    public function getBusStop()
    {
        return $this->bus_stop;
    }
    
    /**
     * Set is_wheelchair_accessible
     *
     * @param boolean $is_wheelchair_accessible
     */
    public function setIsWheelchairAccessible($is_wheelchair_accessible)
    {
        $this->is_wheelchair_accessible = $is_wheelchair_accessible;
    }

    /**
     * Get is_wheelchair_accessible
     *
     * @return boolean
     */
    public function getIsWheelchairAccessible()
    {
        return $this->is_wheelchair_accessible;
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