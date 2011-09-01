<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\BusTourException
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Popolitinero\DefaultBundle\Entity\BusTourExceptionRepository")
 */
class BusTourException
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
     * @var object $bus_steps
     *
     * @ORM\ManyToMany(targetEntity="Popolitinero\DefaultBundle\Entity\BusStep", cascade={"all"})
     */
    private $bus_steps;

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
     * @var text $justification
     *
     * @ORM\Column(name="justification", type="text")
     */
    private $justification;

    /**
     * @var boolean $no_traffic
     *
     * @ORM\Column(name="no_traffic", type="boolean")
     */
    private $no_traffic;

    
    /**
     * Constructor
     */
    
    public function __construct()
    {
        $this->bus_steps = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get BusSteps
     */
    public function getBusSteps()
    {
        return $this->bus_steps;
    }

    /**
     * Add BusStep
     */
    public function addBusStep(\Popolitinero\DefaultBundle\Entity\BusStep $bus_step)
    {
        $this->bus_steps[] = $bus_step;
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
     * Set justification
     *
     * @param text $justification
     */
    public function setJustification($justification)
    {
        $this->justification = $justification;
    }

    /**
     * Get justification
     *
     * @return text 
     */
    public function getJustification()
    {
        return $this->justification;
    }
    
    /**
     * Set no_traffic
     *
     * @param boolean $no_traffic
     */
    public function setNoTraffic($noTraffic)
    {
        $this->no_traffic = $noTraffic;
    }

    /**
     * Get no_traffic
     *
     * @return boolean 
     */
    public function getNoTraffic()
    {
        return $this->no_traffic;
    }
}