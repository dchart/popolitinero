<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\Train
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Train
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
     * @var object $bus_stop_departure
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\BusStop")
     */
    private $bus_stop_departure;

    /**
     * @var object $bus_stop_arrival
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\BusStop")
     */
    private $bus_stop_arrival;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


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
     * Set bus_stop_departure
     *
     * @param object $bus_stop_departure
     */
    public function setBusStopDeparture(\Popolitinero\DefaultBundle\Entity\BusStop $bus_stop_departure)
    {
        $this->bus_stop_departure = $bus_stop_departure;
    }

    /**
     * Get bus_stop_departure
     *
     * @return object $bus_stop_departure
     */
    public function getBusStopDeparture()
    {
        return $this->bus_stop_departure;
    }

    /**
     * Set bus_stop_arrival
     *
     * @param object $bus_stop_arrival
     */
    public function setBusStopArrival(\Popolitinero\DefaultBundle\Entity\BusStop $bus_stop_arrival)
    {
        $this->bus_stop_arrival = $bus_stop_arrival;
    }

    /**
     * Get bus_stop_arrival
     *
     * @return object $bus_stop_arrival
     */
    public function getBusStopArrival()
    {
        return $this->bus_stop_arrival;
    }
    
    /**
     * Set price
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
