<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\City
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class City
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
     * @var string $insee_code
     *
     * @ORM\Column(name="insee_code", type="string", length=5)
     */
    private $insee_code;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $postal_code
     *
     * @ORM\Column(name="postal_code", type="string", length=5)
     */
    private $postal_code;
    
    /**
     * @var object $hub
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\Hub")
     */
    private $hub;
    
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
     * Set insee_code
     *
     * @param string $inseeCode
     */
    public function setInseeCode($inseeCode)
    {
        $this->insee_code = $inseeCode;
    }

    /**
     * Get insee_code
     *
     * @return string 
     */
    public function getInseeCode()
    {
        return $this->insee_code;
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
     * Set postal_code
     *
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postal_code = $postalCode;
    }

    /**
     * Get postal_code
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set Hub
     *
     * @param object $hub
     */
    public function setHub(\Popolitinero\DefaultBundle\Entity\Hub $hub)
    {
        $this->hub = $hub;
    }
    
    /**
     * Get Hub
     *
     * @return object
     */
    public function getHub()
    {
        return $this->hub;
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
