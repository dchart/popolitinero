<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\TrainStep
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TrainStep
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
     * @var TrainTravel $train_travel
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\TrainTravel", inversedBy="steps")
     * @ORM\JoinColumn(name="train_travel_id", referencedColumnName="id")
     */
    protected $train_travel ;

    /**
     * @var TrainStation $train_station
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\TrainStation", inversedBy="steps")
     * @ORM\JoinColumn(name="train_station_id", referencedColumnName="id")
     */
    protected $train_station ;

    /**
     * @var integer $position
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

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
     * Set position
     *
     * @param integer $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set train_travel
     *
     * @param Popolitinero\DefaultBundle\Entity\TrainTravel $trainTravel
     */
    public function setTrainTravel(\Popolitinero\DefaultBundle\Entity\TrainTravel $trainTravel)
    {
        $this->train_travel = $trainTravel;
    }

    /**
     * Get train_travel
     *
     * @return Popolitinero\DefaultBundle\Entity\TrainTravel 
     */
    public function getTrainTravel()
    {
        return $this->train_travel;
    }

    /**
     * Set train_station
     *
     * @param Popolitinero\DefaultBundle\Entity\TrainStation $trainStation
     */
    public function setTrainStation(\Popolitinero\DefaultBundle\Entity\TrainStation $trainStation)
    {
        $this->train_station = $trainStation;
    }

    /**
     * Get train_station
     *
     * @return Popolitinero\DefaultBundle\Entity\TrainStation 
     */
    public function getTrainStation()
    {
        return $this->train_station;
    }
}