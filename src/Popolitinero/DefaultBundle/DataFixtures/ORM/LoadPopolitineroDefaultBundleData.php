<?php
 
namespace Popolitinero\DefaultBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Popolitinero\DefaultBundle\Entity\Hub;
use Popolitinero\DefaultBundle\Entity\City;
use Popolitinero\DefaultBundle\Entity\BusStop;
use Popolitinero\DefaultBundle\Entity\TrainStation;
use Popolitinero\DefaultBundle\Entity\TrainTravel;
use Popolitinero\DefaultBundle\Entity\TrainStep;

class LoadPopolitineroDefaultBundleData implements FixtureInterface
{
    public function load($manager)
    {
        $cc_cognac = new Hub();
        $cc_cognac->setCompactName('CC Cognac');
        $cc_cognac->setFullname('Communauté de communes de Cognac');
        $cognac = new City();
        $cognac->setName('Cognac');
        $cognac->setPostalCode('16100');
        $cognac->setNbInhabitants(19006);
        $NP_cognac = new BusStop();
        $NP_cognac->setCity($cognac);
        $NP_cognac->setName('Place François 1er');
        $NP_cognac->setLatitude('45.693187');
        $NP_cognac->setLongitude('-0.325025');
        $manager->persist($NP_cognac);
        $cognac->setNevralgicPoint($NP_cognac);
        $cc_cognac->setMasterCity($cognac);
        $cc_cognac->setIsActive(true);
        $manager->persist($cc_cognac);
        $cognac->setHub($cc_cognac);
        $manager->persist($cognac);
        
        $cc_pays_buriaud = new Hub();
        $cc_pays_buriaud->setCompactName('CC Pays Buriaud');
        $cc_pays_buriaud->setFullname('Communauté de communes Vignobles et Vals boisés du Pays Buriaud');
        $burie = new City();
        $burie->setName('Burie');
        $burie->setPostalCode('17770');
        $burie->setNbInhabitants('1259');
        $NP_burie = new BusStop();
        $NP_burie->setCity($burie);
        $NP_burie->setName('Centre névralgique de Burie');
        $NP_burie->setLatitude('45.773333');
        $NP_burie->setLongitude('-0.421111');
        $manager->persist($NP_burie);
        $burie->setNevralgicPoint($NP_burie);
        $cc_pays_buriaud->setMasterCity($burie);
        $manager->persist($cc_pays_buriaud);
        $burie->setHub($cc_pays_buriaud);
        $manager->persist($burie);
           
/* Save all *******************************************************************/
        $manager->flush();
    }
 
    public function getOrder()
    {
        return 1; 
    }
}
