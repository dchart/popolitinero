<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Popolitinero\DefaultBundle\Entity\City
 *
 * @ORM\Table()
 * @ORM\Entity()
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotNull(message="Veuillez saisir le nom de cette ville !")
     */
    private $name;

    /**
     * @var string $postal_code
     *
     * @ORM\Column(name="postal_code", type="string", length=5)
     * @Assert\NotNull(message="Veuillez saisir un code postal !")
     * @Assert\MinLength(limit="5", message="Le code postal doit être composé de {{limit}} chiffres !")
     * @Assert\MaxLength(limit="5", message="Le code postal doit être composé de {{limit}} chiffres !")
     */
    private $postal_code;

    /**
     * @var integer $nb_inhabitants
     *
     * @ORM\Column(name="nb_inhabitants", type="integer")
     * @Assert\Min(limit="0", message="Un nombre d'habitants est forcément positif !")
     */
    private $nb_inhabitants = 0;
    
    /**
     * @var Popolitinero\DefaultBundle\Entity\BusStop $nevralgic_point
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\BusStop")
     * @ORM\JoinColumn(name="nevralgic_point_id", referencedColumnName="id")
     * @Assert\NotNull(message="Cette ville doit être associée à un point névralgique.")
     * @Assert\Type(type="Popolitinero\DefaultBundle\Entity\BusStop", message="Le point névralgique est incompatible avec {{ type }}.")
     */
    private $nevralgic_point;
    
    /**
     * @var Popolitinero\DefaultBundle\Entity\Hub $hub
     * 
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\Hub", inversedBy="cities")
     * @ORM\JoinColumn(name="hub_id", referencedColumnName="id", onDelete="cascade", onUpdate="cascade")
     * @Assert\Type(type="Popolitinero\DefaultBundle\Entity\Hub", message="L'intercommunalité est incompatible avec {{ type }}.")
     */
    protected $hub;
    
    /**
     * @var ArrayCollection $bus_stops
     *
     * @ORM\OneToMany(targetEntity="Popolitinero\DefaultBundle\Entity\BusStop", mappedBy="city")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $bus_stops;
    
    /**
     * Constructs a new instance of City
     */
    public function __construct()
    {
    	$this->bus_stops = new ArrayCollection();
    }
    
    /**
	 * @return unindented string representation of City()
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
     * Set nb_inhabitants
     *
     * @param integer $nbInhabitants
     */
    public function setNbInhabitants($nbInhabitants)
    {
        $this->nb_inhabitants = $nbInhabitants;
    }

    /**
     * Get nb_inhabitants
     *
     * @return integer 
     */
    public function getNbInhabitants()
    {
        return $this->nb_inhabitants;
    }

    /**
     * Set nevralgic_point
     *
     * @param Popolitinero\DefaultBundle\Entity\BusStop $nevralgicPoint
     */
    public function setNevralgicPoint(\Popolitinero\DefaultBundle\Entity\BusStop $nevralgicPoint)
    {
        $this->nevralgic_point = $nevralgicPoint;
        $this->nevralgic_point->setIsFamous(true);
    }

    /**
     * Get nevralgic_point
     *
     * @return Popolitinero\DefaultBundle\Entity\BusStop 
     */
    public function getNevralgicPoint()
    {
        return $this->nevralgic_point;
    }

    /**
     * Set hub
     *
     * @param Popolitinero\DefaultBundle\Entity\Hub $hub
     */
    public function setHub(\Popolitinero\DefaultBundle\Entity\Hub $hub)
    {
        $this->hub = $hub;
    }

    /**
     * Get hub
     *
     * @return Popolitinero\DefaultBundle\Entity\Hub 
     */
    public function getHub()
    {
        return $this->hub;
    }

    /**
     * Add bus_stops
     *
     * @param Popolitinero\DefaultBundle\Entity\BusStop $busStops
     */
    public function addBusStop(\Popolitinero\DefaultBundle\Entity\BusStop $busStops)
    {
        $this->bus_stops[] = $busStops;
    }

    /**
     * Get bus_stops
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBusStops()
    {
        return $this->bus_stops;
    }
}