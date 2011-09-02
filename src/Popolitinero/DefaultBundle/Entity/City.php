<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank()
     */
    private $insee_code;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string $postal_code
     *
     * @ORM\Column(name="postal_code", type="string", length=5)
     * @Assert\NotBlank()
     */
    private $postal_code;

    /**
     * @var integer $inhabitants
     *
     * @ORM\Column(name="inhabitants", type="integer")
     */
    private $inhabitants = 0;
    
    /**
     * @var Hub $hub
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\Hub", inversedBy="cities")
     * @ORM\JoinColumn(name="hub_id", referencedColumnName="id", onDelete="cascade", onUpdate="cascade")
     */
    private $hub;
    
    /**
     * @var BusStop $nevralgic_point
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\BusStop", mappedBy="city")
     */
    private $nevralgic_point;
    
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
     * Set inhabitants
     *
     * @param integer $inhabitants
     */
    public function setInhabitants($inhabitants)
    {
        $this->inhabitants = $inhabitants;
    }

    /**
     * Get inhabitants
     *
     * @return integer 
     */
    public function getInhabitants()
    {
        return $this->inhabitants;
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
     * Set nevralgic_point
     *
     * @param BusStop $nevralgic_point
     */
    public function setNevralgicPoint(\Popolitinero\DefaultBundle\Entity\BusStop $nevralgicPoint)
    {
        $this->nevralgic_point = $nevralgicPoint;
    }

    /**
     * Get nevralgic_point
     *
     * @return BusStop 
     */
    public function getNevralgicPoint()
    {
        return $this->nevralgic_point;
    }
}