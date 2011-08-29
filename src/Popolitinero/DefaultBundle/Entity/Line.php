<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\Line
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Line
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
     * @var object $hub
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\Hub", cascade={"all"})
     */
    private $hub;

    /**
     * @var string $code
     *
     * @ORM\Column(name="code", type="string", length=5)
     */
    private $code;

    /**
     * @var string $color
     *
     * @ORM\Column(name="color", type="string", length=7)
     */
    private $color;


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
     * Set code
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set color
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }
}
