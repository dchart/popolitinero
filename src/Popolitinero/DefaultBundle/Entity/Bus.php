<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\Bus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Popolitinero\DefaultBundle\Entity\BusRepository")
 */
class Bus
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
     * @var string $license_plate
     *
     * @ORM\Column(name="license_plate", type="string", length=255)
     */
    private $license_plate;

    /**
     * @var integer $nb_passengers
     *
     * @ORM\Column(name="nb_passengers", type="integer", length=3)
     */
    private $nb_passengers;
    
    /**
     * @var date $start_exploitation
     *
     * @ORM\Column(name="start_exploitation", type="date")
     */
    private $start_exploitation;


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
     * Set license_plate
     *
     * @param string $licensePlate
     */
    public function setLicensePlate($licensePlate)
    {
        $this->license_plate = $licensePlate;
    }

    /**
     * Get license_plate
     *
     * @return string 
     */
    public function getLicensePlate()
    {
        return $this->license_plate;
    }
    
    /**
     * Set nb_passengers
     *
     * @param integer $nb_passengers
     */
    public function setNbPassengers($nb_passengers)
    {
        $this->nb_passengers = $nb_passengers;
    }

    /**
     * Get nb_passengers
     *
     * @return integer
     */
    public function getNbPassengers()
    {
        return $this->nb_passengers;
    }
    
    /**
     * Set start_exploitation
     *
     * @param date $startExploitation
     */
    public function setStartExploitation($startExploitation)
    {
        $this->start_exploitation = $startExploitation;
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
     * Get start_exploitation
     *
     * @return date 
     */
    public function getStartExploitation()
    {
        return $this->start_exploitation;
    }
}