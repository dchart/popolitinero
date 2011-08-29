<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\BusStep
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Popolitinero\DefaultBundle\Entity\BusStepRepository")
 */
class BusStep
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
     * @var object $bus_tour
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\BusTour", cascade={"all"})
     */
    private $bus_tour;
    
    /**
     * @var object $bus_stop
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\BusStop", cascade={"all"})
     */
    private $bus_stop;

    /**
     * @var time $hour
     *
     * @ORM\Column(name="hour", type="time")
     */
    private $hour;


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
     * Set BusTour
     *
     * @param object $bus_tour
     */
    public function setBusTour(\Popolitinero\DefaultBundle\Entity\BusTour $bus_tour)
    {
        $this->bus_tour = $bus_tour;
    }
    
    /**
     * Get BusTour
     *
     * @return object
     */
    public function getBusTour()
    {
        return $this->bus_tour;
    }

    /**
     * Set BusStop
     *
     * @param object $bus_stop
     */
    public function setBusStop(\Popolitinero\DefaultBundle\Entity\BusStop $bus_stop)
    {
        $this->bus_stop = $bus_stop;
    }
    
    /**
     * Get BusStop
     *
     * @return object
     */
    public function getBusStop()
    {
        return $this->bus_stop;
    }

    /**
     * Set hour
     *
     * @param time $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * Get hour
     *
     * @return time 
     */
    public function getHour()
    {
        return $this->hour;
    }
}
