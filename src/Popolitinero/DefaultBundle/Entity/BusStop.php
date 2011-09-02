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
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id", onDelete="cascade", onUpdate="cascade")
     */
    private $city;

    /**
     * @var boolean $is_famous
     *
     * @ORM\Column(name="is_famous", type="boolean")
     */
    private $is_famous = false;

    /**
     * @var decimal $latitude
     *
     * @ORM\Column(name="latitude", type="decimal", precision=12, scale=8)
     */
    private $latitude;

    /**
     * @var decimal $longitude
     *
     * @ORM\Column(name="longitude", type="decimal", precision=12, scale=8)
     */
    private $longitude;

    /**
     * @var string __toString
     */
    public function __toString()
    {
        return $this->name;
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
     * @param City $city
     */
    public function setCity(\Popolitinero\DefaultBundle\Entity\City $city)
    {
        $this->city = $city;
    }
    
    /**
     * Get City
     *
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set is_famous
     *
     * @param boolean $isFamous
     */
    public function setIsFamous($isFamous)
    {
        $this->is_famous = $isFamous;
    }

    /**
     * Get is_famous
     *
     * @return boolean 
     */
    public function getIsFamous()
    {
        return $this->is_famous;
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