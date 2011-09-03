<?php

namespace Popolitinero\DefaultBundle\Entity;

use SamJ\DoctrineSluggableBundle\SluggableInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Popolitinero\DefaultBundle\Entity\Hub
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Popolitinero\DefaultBundle\Entity\HubRepository")
 */
class Hub implements SluggableInterface
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
     * @var string $fullname
     *
     * @ORM\Column(name="fullname", type="string", length=255)
     * @Assert\NotNull(message="Veuillez saisir l'intitulé complet de cette intercommunalité !")
     * @Assert\MaxLength(limit="255", message="Le nom complet de cette intercommunalité ne devrait pas excéder {{limit}} caractères !")
     */
    private $fullname;

    /**
     * @var string $compact_name
     *
     * @ORM\Column(name="compact_name", type="string", length=60)
     * @Assert\NotNull(message="Veuillez saisir le nom compact de cette intercommunalité !")
     * @Assert\MaxLength(limit="60", message="Le nom compact de cette intercommunalité ne doit pas excéder {{limit}} caractères !")
     */
    private $compact_name;
    
    /**
     * @var Popolitinero\DefaultBundle\Entity\City $master_city
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\City")
     * @ORM\JoinColumn(name="master_city_id", referencedColumnName="id")
     * @Assert\NotNull(message="Cette intercommunalité doit être associée à une ville maitresse.")
     * @Assert\Type(type="Popolitinero\DefaultBundle\Entity\City", message="La ville maitresse est incompatible avec {{ type }}.")
     */
    private $master_city;
    
    /**
     * @var float $coverage_ratio_of_user_needs
     *
     * @ORM\Column(name="coverage_ratio_of_user_needs", type="float")
     * @Assert\NotNull(message="Le taux de couverture doit être défini.")
     * @Assert\Min(limit = "0.5", message = "Le taux de couverture doit être compris entre 50 et 95% !")
     * @Assert\Max(limit = "0.95", message = "Le taux de couverture doit être compris entre 50 et 95% !")
     */
    private $coverage_ratio_of_user_needs = 0.8;

    /**
     * @var boolean $is_active
     *
     * @ORM\Column(type="boolean")
     */
    private $is_active = false;
    
    /**
     * @var string $slug
     *
     * @ORM\Column(type="string")
     */
    private $slug;
    
    /**
     * @var ArrayCollection $cities
     * 
     * @ORM\OneToMany(targetEntity="Popolitinero\DefaultBundle\Entity\City", mappedBy="hub")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $cities;
    
    /**
     * Constructs a new instance of Hub
     */
    public function __construct()
    {
    	$this->cities = new ArrayCollection();
    }
    
    /**
	 * @return unindented string representation of Hub()
	 */
    public function __toString()
    {
	  return $this->compact_name;
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
     * Set fullname
     *
     * @param string $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set compact_name
     *
     * @param string $compactName
     */
    public function setCompactName($compactName)
    {
        $this->compact_name = $compactName;
    }

    /**
     * Get compact_name
     *
     * @return string 
     */
    public function getCompactName()
    {
        return $this->compact_name;
    }

    /**
     * Set coverage_ratio_of_user_needs
     *
     * @param float $coverageRatioOfUserNeeds
     */
    public function setCoverageRatioOfUserNeeds($coverageRatioOfUserNeeds)
    {
        $this->coverage_ratio_of_user_needs = $coverageRatioOfUserNeeds;
    }

    /**
     * Get coverage_ratio_of_user_needs
     *
     * @return float 
     */
    public function getCoverageRatioOfUserNeeds()
    {
        return $this->coverage_ratio_of_user_needs;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }
    
    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
    	if (!empty($this->slug)) return false;
    	$this->slug = $slug;
    }
    
    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
    	return $this->slug;
    }
    
    /**
     * Get slug field(s)
     *
     * @return string
     */
    public function getSlugFields()
    {
    	return $this->getCompactName();
    }
    
    /**
     * Set master_city
     *
     * @param Popolitinero\DefaultBundle\Entity\City $masterCity
     */
    public function setMasterCity(\Popolitinero\DefaultBundle\Entity\City $masterCity)
    {
        $this->master_city = $masterCity;
    }

    /**
     * Get master_city
     *
     * @return Popolitinero\DefaultBundle\Entity\City 
     */
    public function getMasterCity()
    {
        return $this->master_city;
    }

    /**
     * Add cities
     *
     * @param Popolitinero\DefaultBundle\Entity\City $cities
     */
    public function addCity(\Popolitinero\DefaultBundle\Entity\City $cities)
    {
        $this->cities[] = $cities;
    }

    /**
     * Get cities
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCities()
    {
        return $this->cities;
    }
}