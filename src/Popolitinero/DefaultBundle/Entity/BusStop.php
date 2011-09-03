<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="name", type="string", length=40)
     * @Assert\NotNull(message="Veuillez saisir le nom de cet arrêt de bus !")
     * @Assert\MaxLength(limit="40", message="Le nom de cet arrêt ne doit pas excéder {{limit}} caractères !")
     */
    private $name;
    
    /**
     * @var Popolitinero\DefaultBundle\Entity\City $city
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\City", inversedBy="bus_stops")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id", onDelete="cascade", onUpdate="cascade")
     * @Assert\NotNull(message="Cet arrêt doit être obligatoirement associé à une ville !")
     * @Assert\Type(type="Popolitinero\DefaultBundle\Entity\City", message="La ville est incompatible avec {{ type }}.")
     */
    protected $city;

    /**
     * @var boolean $is_famous
     *
     * @ORM\Column(name="is_famous", type="boolean")
     * @Assert\Type(type="bool", message="$is_famous n'est pas booléen.")
     */
    private $is_famous = false;

    /**
     * @var decimal $latitude
     *
     * @ORM\Column(name="latitude", type="decimal", precision=12, scale=8)
     * @Assert\NotBlank()
     * @Assert\Min(limit="-90", message="La latitude doit être une valeur comprise entre -90 et 90 !")
     * @Assert\Max(limit="90", message="Le latitude doit être une valeur comprise entre -90 et 90 !")
     * @Assert\Type(type="decimal", message="La latitude ne semble pas être de type {{ type }}.")
     */
    private $latitude;

    /**
     * @var decimal $longitude
     *
     * @ORM\Column(name="longitude", type="decimal", precision=12, scale=8)
     * @Assert\NotBlank()
     * @Assert\Min(limit="-180", message="La longitude doit être une valeur comprise entre -180 et 180 !")
     * @Assert\Max(limit="180", message="Le longitude doit être une valeur comprise entre -180 et 180 !")
     * @Assert\Type(type="decimal", message="La longitude ne semble pas être de type {{ type }}.")
     */
    private $longitude;
    
    /**
	 * @return unindented string representation of BusStop()
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

    /**
     * Set city
     *
     * @param Popolitinero\DefaultBundle\Entity\City $city
     */
    public function setCity(\Popolitinero\DefaultBundle\Entity\City $city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return Popolitinero\DefaultBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }
}