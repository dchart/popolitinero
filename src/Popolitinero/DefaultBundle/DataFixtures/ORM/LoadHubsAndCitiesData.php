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
        
        /* CC du Pays santon **************************************************/
        $cc_pays_santon = new Hub();
        $cc_pays_santon->setName('CC du Pays santon');
        $cc_pays_santon->setFullname('Communauté de communes du Pays santon');
        $saintes = new City();
        $saintes->setInseeCode('17415');
        $saintes->setName('Saintes');
        $saintes->setPostalCode('17100');
        $saintes->setLatitude('45.748');
        $saintes->setLongitude('-0.638');
        $cc_pays_santon->setMasterCity($saintes);
        $manager->persist($cc_pays_santon);
        $saintes->setHub($cc_pays_santon);
        $manager->persist($saintes);
        
        $bussac_sur_charente = new City();
        $bussac_sur_charente->setInseeCode('17073');
        $bussac_sur_charente->setName('Boussac-sur-Charente');
        $bussac_sur_charente->setPostalCode('17100');
        $bussac_sur_charente->setLatitude('45.786944');
        $bussac_sur_charente->setLongitude('-0.633056');
        $bussac_sur_charente->setHub($cc_pays_santon);
        $manager->persist($bussac_sur_charente);
        
        $la_chapelle_des_pots = new City();
        $la_chapelle_des_pots->setInseeCode('17089');
        $la_chapelle_des_pots->setName('La Chapelle-des-Pots');
        $la_chapelle_des_pots->setPostalCode('17100');
        $la_chapelle_des_pots->setLatitude('45.760556');
        $la_chapelle_des_pots->setLongitude('-0.539444');
        $la_chapelle_des_pots->setHub($cc_pays_santon);
        $manager->persist($la_chapelle_des_pots);
        
        $chermignac = new City();
        $chermignac->setInseeCode('17102');
        $chermignac->setName('Chermignac');
        $chermignac->setPostalCode('17460');
        $chermignac->setLatitude('45.684167');
        $chermignac->setLongitude('-0.670556');
        $chermignac->setHub($cc_pays_santon);
        $manager->persist($chermignac);
        
        $colombiers = new City();
        $colombiers->setInseeCode('17115');
        $colombiers->setName('Colombiers');
        $colombiers->setPostalCode('17460');
        $colombiers->setLatitude('45.644444');
        $colombiers->setLongitude('-0.549167');
        $colombiers->setHub($cc_pays_santon);
        $manager->persist($colombiers);
        
        $courcoury = new City();
        $courcoury->setInseeCode('17128');
        $courcoury->setName('Courcoury');
        $courcoury->setPostalCode('17100');
        $courcoury->setLatitude('45.712778');
        $courcoury->setLongitude('-0.578889');
        $courcoury->setHub($cc_pays_santon);
        $manager->persist($courcoury);
        
        $le_douhet = new City();
        $le_douhet->setInseeCode('17143');
        $le_douhet->setName('Le Douhet');
        $le_douhet->setPostalCode('17100');
        $le_douhet->setLatitude('45.820278');
        $le_douhet->setLongitude('-0.569722');
        $le_douhet->setHub($cc_pays_santon);
        $manager->persist($le_douhet);
        
        $ecurat = new City();
        $ecurat->setInseeCode('17148');
        $ecurat->setName('Écurat');
        $ecurat->setPostalCode('17810');
        $ecurat->setLatitude('45.784722');
        $ecurat->setLongitude('-0.673611');
        $ecurat->setHub($cc_pays_santon);
        $manager->persist($ecurat);
        
        $fontcouverte = new City();
        $fontcouverte->setInseeCode('17164');
        $fontcouverte->setName('Fontcouverte');
        $fontcouverte->setPostalCode('17100');
        $fontcouverte->setLatitude('45.7725');
        $fontcouverte->setLongitude('-0.5903');
        $fontcouverte->setHub($cc_pays_santon);
        $manager->persist($fontcouverte);
        
        $les_gonds = new City();
        $les_gonds->setInseeCode('17179');
        $les_gonds->setName('Les Gonds');
        $les_gonds->setPostalCode('17100');
        $les_gonds->setLatitude('45.716111');
        $les_gonds->setLongitude('-0.615556');
        $les_gonds->setHub($cc_pays_santon);
        $manager->persist($les_gonds);
        
        $la_jard = new City();
        $la_jard->setInseeCode('17191');
        $la_jard->setName('La Jard');
        $la_jard->setPostalCode('17460');
        $la_jard->setLatitude('45.655278');
        $la_jard->setLongitude('-0.584722');
        $la_jard->setHub($cc_pays_santon);
        $manager->persist($la_jard);
        
        $pessines = new City();
        $pessines->setInseeCode('17275');
        $pessines->setName('Pessines');
        $pessines->setPostalCode('17810');
        $pessines->setLatitude('45.7297');
        $pessines->setLongitude('-0.7169');
        $pessines->setHub($cc_pays_santon);
        $manager->persist($pessines);
        
        $preguillac = new City();
        $preguillac->setInseeCode('17289');
        $preguillac->setName('Préguillac');
        $preguillac->setPostalCode('17460');
        $preguillac->setLatitude('45.671667');
        $preguillac->setLongitude('-0.615278');
        $preguillac->setHub($cc_pays_santon);
        $manager->persist($preguillac);
        
        $saint_georges_des_coteaux = new City();
        $saint_georges_des_coteaux->setInseeCode('17336');
        $saint_georges_des_coteaux->setName('Saint-Georges-des-Coteaux');
        $saint_georges_des_coteaux->setPostalCode('17810');
        $saint_georges_des_coteaux->setLatitude('45.763056');
        $saint_georges_des_coteaux->setLongitude('-0.710833');
        $saint_georges_des_coteaux->setHub($cc_pays_santon);
        $manager->persist($saint_georges_des_coteaux);
        
        $saint_sever_de_saintonge = new City();
        $saint_sever_de_saintonge->setInseeCode('17400');
        $saint_sever_de_saintonge->setName('Saint-Sever-de-Saintonge');
        $saint_sever_de_saintonge->setPostalCode('17800');
        $saint_sever_de_saintonge->setLatitude('45.694722');
        $saint_sever_de_saintonge->setLongitude('-0.506944');
        $saint_sever_de_saintonge->setHub($cc_pays_santon);
        $manager->persist($saint_sever_de_saintonge);
        
        $saint_vaize = new City();
        $saint_vaize->setInseeCode('17412');
        $saint_vaize->setName('Saint-Vaize');
        $saint_vaize->setPostalCode('17100');
        $saint_vaize->setLatitude('45.812778');
        $saint_vaize->setLongitude('-0.63');
        $saint_vaize->setHub($cc_pays_santon);
        $manager->persist($saint_vaize);
        
        $thenac = new City();
        $thenac->setInseeCode('17444');
        $thenac->setName('Thénac');
        $thenac->setPostalCode('17460');
        $thenac->setLatitude('45.668611');
        $thenac->setLongitude('-0.652778');
        $thenac->setHub($cc_pays_santon);
        $manager->persist($thenac);
        
        $varzay = new City();
        $varzay->setInseeCode('17460');
        $varzay->setName('Varzay');
        $varzay->setPostalCode('17460');
        $varzay->setLatitude('45.705833');
        $varzay->setLongitude('-0.733611');
        $varzay->setHub($cc_pays_santon);
        $manager->persist($varzay);
        
        $venerand = new City();
        $venerand->setInseeCode('17460');
        $venerand->setName('Vénérand');
        $venerand->setPostalCode('17100');
        $venerand->setLatitude('45.7942');
        $venerand->setLongitude('-0.5592');
        $venerand->setHub($cc_pays_santon);
        $manager->persist($venerand);
        
        /* Save all Hubs and Cities *******************************************/
        $manager->flush();
    }
 
    public function getOrder()
    {
        return 1; 
    }
}

