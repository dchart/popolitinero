<?php

namespace Popolitinero\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Popolitinero\DefaultBundle\Entity\BusTour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Popolitinero\DefaultBundle\Entity\BusTourRepository")
 */
class BusTour
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
     * @var object $line
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\Line", cascade={"all"})
     */
    private $line;

    /**
     * @var object $bus
     *
     * @ORM\ManyToOne(targetEntity="Popolitinero\DefaultBundle\Entity\Bus", cascade={"all"})
     */
    private $bus;

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
     * @var boolean $run_mon
     *
     * @ORM\Column(name="run_mon", type="boolean")
     */
    private $run_mon;

    /**
     * @var boolean $run_tue
     *
     * @ORM\Column(name="run_tue", type="boolean")
     */
    private $run_tue;

    /**
     * @var boolean $run_wed
     *
     * @ORM\Column(name="run_wed", type="boolean")
     */
    private $run_wed;

    /**
     * @var boolean $run_thu
     *
     * @ORM\Column(name="run_thu", type="boolean")
     */
    private $run_thu;

    /**
     * @var boolean $run_fri
     *
     * @ORM\Column(name="run_fri", type="boolean")
     */
    private $run_fri;

    /**
     * @var boolean $run_sat
     *
     * @ORM\Column(name="run_sat", type="boolean")
     */
    private $run_sat;

    /**
     * @var boolean $run_sun
     *
     * @ORM\Column(name="run_sun", type="boolean")
     */
    private $run_sun;

    /**
     * @var boolean $run_hol
     *
     * @ORM\Column(name="run_hol", type="boolean")
     */
    private $run_hol;


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
     * Set Line
     *
     * @param object $line
     */
    public function setLine(\Popolitinero\DefaultBundle\Entity\Line $line)
    {
        $this->line = $line;
    }
    
    /**
     * Get Line
     *
     * @return object
     */
    public function getLine()
    {
        return $this->line;
    }
    
    /**
     * Set bus
     *
     * @param object $bus
     */
    public function setBus(\Popolitinero\DefaultBundle\Entity\Bus $bus)
    {
        $this->bus = $bus;
    }
    
    /**
     * Get bus
     *
     * @return object
     */
    public function getBus()
    {
        return $this->bus;
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
     * Set run_mon
     *
     * @param boolean $runMon
     */
    public function setRunMon($runMon)
    {
        $this->run_mon = $runMon;
    }

    /**
     * Get run_mon
     *
     * @return boolean 
     */
    public function getRunMon()
    {
        return $this->run_mon;
    }

    /**
     * Set run_tue
     *
     * @param boolean $runTue
     */
    public function setRunTue($runTue)
    {
        $this->run_tue = $runTue;
    }

    /**
     * Get run_tue
     *
     * @return boolean 
     */
    public function getRunTue()
    {
        return $this->run_tue;
    }

    /**
     * Set run_wed
     *
     * @param boolean $runWed
     */
    public function setRunWed($runWed)
    {
        $this->run_wed = $runWed;
    }

    /**
     * Get run_wed
     *
     * @return boolean 
     */
    public function getRunWed()
    {
        return $this->run_wed;
    }

    /**
     * Set run_thu
     *
     * @param boolean $runThu
     */
    public function setRunThu($runThu)
    {
        $this->run_thu = $runThu;
    }

    /**
     * Get run_thu
     *
     * @return boolean 
     */
    public function getRunThu()
    {
        return $this->run_thu;
    }

    /**
     * Set run_fri
     *
     * @param boolean $runFri
     */
    public function setRunFri($runFri)
    {
        $this->run_fri = $runFri;
    }

    /**
     * Get run_fri
     *
     * @return boolean 
     */
    public function getRunFri()
    {
        return $this->run_fri;
    }

    /**
     * Set run_sat
     *
     * @param boolean $runSat
     */
    public function setRunSat($runSat)
    {
        $this->run_sat = $runSat;
    }

    /**
     * Get run_sat
     *
     * @return boolean 
     */
    public function getRunSat()
    {
        return $this->run_sat;
    }

    /**
     * Set run_sun
     *
     * @param boolean $runSun
     */
    public function setRunSun($runSun)
    {
        $this->run_sun = $runSun;
    }

    /**
     * Get run_sun
     *
     * @return boolean 
     */
    public function getRunSun()
    {
        return $this->run_sun;
    }

    /**
     * Set run_hol
     *
     * @param boolean $runHol
     */
    public function setRunHol($runHol)
    {
        $this->run_hol = $runHol;
    }

    /**
     * Get run_hol
     *
     * @return boolean 
     */
    public function getRunHol()
    {
        return $this->run_hol;
    }
}