<?php

namespace Popolitinero\DefaultBundle\Entity;

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
     * @var object $train
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\Train")
     */
    private $train;

    /**
     * @var datetime $departure
     *
     * @ORM\Column(name="departure", type="datetime")
     */
    private $departure;

    /**
     * @var datetime $arrival
     *
     * @ORM\Column(name="arrival", type="datetime")
     */
    private $arrival;


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
     * Set train
     *
     * @param object $train
     */
    public function setTrain(\Popolitinero\DefaultBundle\Entity\Train $train)
    {
        $this->train = $train;
    }

    /**
     * Get train
     *
     * @return object $train
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * Set departure
     *
     * @param datetime $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * Get departure
     *
     * @return datetime 
     */
    public function getDeparture()
    {
        return $this->departure;
    }
    
    /**
     * Set arrival
     *
     * @param datetime $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * Get arrival
     *
     * @return datetime 
     */
    public function getArrival()
    {
        return $this->arrival;
    }
}
