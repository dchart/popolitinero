<?php
 
namespace Popolitinero\DefaultBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Popolitinero\DefaultBundle\Entity\Hub;
use Popolitinero\DefaultBundle\Entity\City;

class LoadHubsAndCitiesData implements FixtureInterface
{
    public function load($manager)
    {
        /* CC de Cognac *******************************************************/
        $cc_cognac = new Hub();
        $cc_cognac->setName('CC de Cognac');
        $cc_cognac->setFullname('Communauté de communes de Cognac');
        $cognac = new City();
        $cognac->setInseeCode('16102');
        $cognac->setName('Cognac');
        $cognac->setPostalCode('16100');
        $cognac->setLatitude('45.693187');
        $cognac->setLongitude('-0.325025');
        $cc_cognac->setMasterCity($cognac);
        $manager->persist($cc_cognac);
        $cognac->setHub($cc_cognac);
        $manager->persist($cognac);
        
        $ars = new City();
        $ars->setInseeCode('16018');
        $ars->setName('Ars');
        $ars->setPostalCode('16130');
        $ars->setHub($cc_cognac);
        $ars->setLatitude('45.642904');
        $ars->setLongitude('-0.383706');
        $manager->persist($ars);
        
        $boutiers_saint_trojan = new City();
        $boutiers_saint_trojan->setInseeCode('16058');
        $boutiers_saint_trojan->setName('Boutiers-Saint-Trojan');
        $boutiers_saint_trojan->setPostalCode('16100');
        $boutiers_saint_trojan->setHub($cc_cognac);
        $boutiers_saint_trojan->setLatitude('45.712277');
        $boutiers_saint_trojan->setLongitude('-0.299635');
        $manager->persist($boutiers_saint_trojan);
        
        $breville = new City();
        $breville->setInseeCode('16060');
        $breville->setName('Bréville');
        $breville->setPostalCode('16370');
        $breville->setHub($cc_cognac);
        $breville->setLatitude('45.796430');
        $breville->setLongitude('-0.261655');
        $manager->persist($breville);
        
        $chateaubernard = new City();
        $chateaubernard->setInseeCode('16089');
        $chateaubernard->setName('Châteaubernard');
        $chateaubernard->setPostalCode('16100');
        $chateaubernard->setHub($cc_cognac);
        $chateaubernard->setLatitude('45.673629');
        $chateaubernard->setLongitude('-0.315696');
        $manager->persist($chateaubernard);
        
        $cherves_richemont = new City();
        $cherves_richemont->setInseeCode('16097');
        $cherves_richemont->setName('Cherves-Richemont');
        $cherves_richemont->setPostalCode('16370');
        $cherves_richemont->setHub($cc_cognac);
        $cherves_richemont->setLatitude('45.743984');
        $cherves_richemont->setLongitude('-0.357378');
        $manager->persist($cherves_richemont);        
        
        $gimeux = new City();
        $gimeux->setInseeCode('16152');
        $gimeux->setName('Gimeux');
        $gimeux->setPostalCode('16130');
        $gimeux->setHub($cc_cognac);
        $gimeux->setLatitude('45.635943');
        $gimeux->setLongitude('-0.369244');
        $manager->persist($gimeux);
        
        $javrezac = new City();
        $javrezac->setInseeCode('16169');
        $javrezac->setName('Javrezac');
        $javrezac->setPostalCode('16100');
        $javrezac->setHub($cc_cognac);
        $javrezac->setLatitude('45.701245');
        $javrezac->setLongitude('-0.358279');
        $manager->persist($javrezac);
        
        $louzac_saint_andre = new City();
        $louzac_saint_andre->setInseeCode('16193');
        $louzac_saint_andre->setName('Louzac-Saint-André');
        $louzac_saint_andre->setPostalCode('16100');
        $louzac_saint_andre->setHub($cc_cognac);
        $louzac_saint_andre->setLatitude('45.714911');
        $louzac_saint_andre->setLongitude('-0.402997');
        $manager->persist($louzac_saint_andre);
        
        $merpins = new City();
        $merpins->setInseeCode('16217');
        $merpins->setName('Merpins');
        $merpins->setPostalCode('16100');
        $merpins->setHub($cc_cognac);
        $merpins->setLatitude('45.673094');
        $merpins->setLongitude('-0.363708');
        $manager->persist($merpins);
        
        $mesnac = new City();
        $mesnac->setInseeCode('16218');
        $mesnac->setName('Mesnac');
        $mesnac->setPostalCode('16370');
        $mesnac->setHub($cc_cognac);
        $mesnac->setLatitude('45.776675');
        $mesnac->setLongitude('-0.358558');
        $manager->persist($mesnac);
        
        $saint_brice = new City();
        $saint_brice->setInseeCode('16304');
        $saint_brice->setName('Saint-Brice');
        $saint_brice->setPostalCode('16100');
        $saint_brice->setHub($cc_cognac);
        $saint_brice->setLatitude('45.687996');
        $saint_brice->setLongitude('-0.272620');
        $manager->persist($cc_cognac);
        
        $saint_laurent_de_cognac = new City();
        $saint_laurent_de_cognac->setInseeCode('16330');
        $saint_laurent_de_cognac->setName('Saint-Laurent-de-Cognac');
        $saint_laurent_de_cognac->setPostalCode('16100');
        $saint_laurent_de_cognac->setHub($cc_cognac);
        $saint_laurent_de_cognac->setLatitude('45.697139');
        $saint_laurent_de_cognac->setLongitude('-0.408103');
        $manager->persist($saint_laurent_de_cognac);
        
        $saint_sulpice_de_cognac = new City();
        $saint_sulpice_de_cognac->setInseeCode('16355');
        $saint_sulpice_de_cognac->setName('Saint-Sulpice-de-Cognac');
        $saint_sulpice_de_cognac->setPostalCode('16370');
        $saint_sulpice_de_cognac->setHub($cc_cognac);
        $saint_sulpice_de_cognac->setLatitude('45.760090');
        $saint_sulpice_de_cognac->setLongitude('-0.381303');
        $manager->persist($saint_sulpice_de_cognac);
        
        /* Save all Hubs and Cities *******************************************/
        $manager->flush();
    }
 
    public function getOrder()
    {
        return 1; 
    }
}

