<?php

namespace Popolitinero\DefaultBundle\Entity;

use SamJ\DoctrineSluggableBundle\SluggableInterface;

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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string $fullname
     *
     * @ORM\Column(name="fullname", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $fullname;
    
    /**
     * @var object $master_city
     *
     * @ORM\OneToOne(targetEntity="Popolitinero\DefaultBundle\Entity\City")
     */
    private $master_city;
    
    /**
     * @var integer $coverage_ratio_of_user_needs
     *
     * @ORM\Column(name="coverage_ratio_of_user_needs", type="integer", length=2)
     * @Assert\NotBlank()
     * @Assert\Min(limit = "50", message = "Le taux de couverture doit être compris entre 50 et 95% !")
     * @Assert\Max(limit = "95", message = "Le taux de couverture doit être compris entre 50 et 95% !")
     */
    private $coverage_ratio_of_user_needs = 80;

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
    * @ORM\OneToMany(targetEntity="Popolitinero\DefaultBundle\Entity\City", mappedBy="hub")
    *
    */
    protected $cities;

    /**
     * @var string __toString
     */
    public function __toString()
    {
        return $this->fullname;
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
     * Set master_city
     *
     * @param object $masterCity
     */
    public function setMasterCity(\Popolitinero\DefaultBundle\Entity\City $masterCity)
    {
        $this->master_city = $masterCity;
    }

    /**
     * Get master_city
     *
     * @return object 
     */
    public function getMasterCity()
    {
        return $this->master_city;
    }
    
    /**
     * Set coverage_ratio_of_user_needs
     *
     * @param integer $coverage_ratio_of_user_needs
     */
    public function setCoverageRatioOfUserNeeds($coverage_ratio_of_user_needs)
    {
        $this->coverage_ratio_of_user_needs = $coverage_ratio_of_user_needs;
    }
    
    /**
     * Get coverage_ratio_of_user_needs
     *
     * @return integer
     */
    public function getCoverageRatioOfUserNeeds($coverage_ratio_of_user_needs)
    {
        return $this->coverage_ratio_of_user_needs;
    }
    
    /**
     * Set is_active
     *
     * @param boolean $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
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
    
    /* Slug */
    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        if (!empty($this->slug)) return false;
        $this->slug = $slug;
    }

    public function getSlugFields()
    {
        return $this->getName();
    }
    public function __construct()
    {
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
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