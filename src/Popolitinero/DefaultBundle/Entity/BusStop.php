<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\BusStop
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class BusStop
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var object $city
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\City")
     */
    private $city;

    /**
     * @var boolean $is_terminus
     *
     * @ORM\Column(name="is_terminus", type="boolean")
     */
    private $is_terminus;

    /**
     * @var boolean $is_on_demand
     *
     * @ORM\Column(name="is_on_demand", type="boolean")
     */
    private $is_on_demand;

    /**
     * @var decimal $latitude
     *
     * @ORM\Column(name="latitude", type="decimal")
     */
    private $latitude;

    /**
     * @var decimal $longitude
     *
     * @ORM\Column(name="longitude", type="decimal")
     */
    private $longitude;


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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set City
     *
     * @param object $city
     */
    public function setCity(\Popolitinero\DefaultBundle\Entity\City $city)
    {
        $this->city = $city;
    }
    
    /**
     * Get City
     *
     * @return object
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set is_terminus
     *
     * @param boolean $isTerminus
     */
    public function setIsTerminus($isTerminus)
    {
        $this->is_terminus = $isTerminus;
    }

    /**
     * Get is_terminus
     *
     * @return boolean 
     */
    public function getIsTerminus()
    {
        return $this->is_terminus;
    }

    /**
     * Set is_on_demand
     *
     * @param boolean $isOnDemand
     */
    public function setIsOnDemand($isOnDemand)
    {
        $this->is_on_demand = $isOnDemand;
    }

    /**
     * Get is_on_demand
     *
     * @return boolean 
     */
    public function getIsOnDemand()
    {
        return $this->is_on_demand;
    }

    /**
     * Set latitude
     *
     * @param decimal $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get latitude
     *
     * @return decimal 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param decimal $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Get longitude
     *
     * @return decimal 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
