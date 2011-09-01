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
        $cc_cognac->setName('CC Cognac');
        $cc_cognac->setFullname('Communauté de communes de Cognac');
        $cognac = new City();
        $cognac->setInseeCode('16102');
        $cognac->setName('Cognac');
        $cognac->setPostalCode('16100');
        $cognac->setLatitude('45.693187');
        $cognac->setLongitude('-0.325025');
        $cognac->setInhabitants(19006);
        $cc_cognac->setMasterCity($cognac);
        $cc_cognac->setIsActive(true);
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
        $ars->setInhabitants(722);
        $manager->persist($ars);
        
        $boutiers_saint_trojan = new City();
        $boutiers_saint_trojan->setInseeCode('16058');
        $boutiers_saint_trojan->setName('Boutiers-Saint-Trojan');
        $boutiers_saint_trojan->setPostalCode('16100');
        $boutiers_saint_trojan->setHub($cc_cognac);
        $boutiers_saint_trojan->setLatitude('45.712277');
        $boutiers_saint_trojan->setLongitude('-0.299635');
        $boutiers_saint_trojan->setInhabitants('1351');
        $manager->persist($boutiers_saint_trojan);
        
        $breville = new City();
        $breville->setInseeCode('16060');
        $breville->setName('Bréville');
        $breville->setPostalCode('16370');
        $breville->setHub($cc_cognac);
        $breville->setLatitude('45.796430');
        $breville->setLongitude('-0.261655');
        $breville->setInhabitants('521');
        $manager->persist($breville);
        
        $chateaubernard = new City();
        $chateaubernard->setInseeCode('16089');
        $chateaubernard->setName('Châteaubernard');
        $chateaubernard->setPostalCode('16100');
        $chateaubernard->setHub($cc_cognac);
        $chateaubernard->setLatitude('45.673629');
        $chateaubernard->setLongitude('-0.315696');
        $chateaubernard->setInhabitants('3899');
        $manager->persist($chateaubernard);
        
        $cherves_richemont = new City();
        $cherves_richemont->setInseeCode('16097');
        $cherves_richemont->setName('Cherves-Richemont');
        $cherves_richemont->setPostalCode('16370');
        $cherves_richemont->setHub($cc_cognac);
        $cherves_richemont->setLatitude('45.743984');
        $cherves_richemont->setLongitude('-0.357378');
        $cherves_richemont->setInhabitants('2420');
        $manager->persist($cherves_richemont);        
        
        $gimeux = new City();
        $gimeux->setInseeCode('16152');
        $gimeux->setName('Gimeux');
        $gimeux->setPostalCode('16130');
        $gimeux->setHub($cc_cognac);
        $gimeux->setLatitude('45.635943');
        $gimeux->setLongitude('-0.369244');
        $gimeux->setInhabitants('716');
        $manager->persist($gimeux);
        
        $javrezac = new City();
        $javrezac->setInseeCode('16169');
        $javrezac->setName('Javrezac');
        $javrezac->setPostalCode('16100');
        $javrezac->setHub($cc_cognac);
        $javrezac->setLatitude('45.701245');
        $javrezac->setLongitude('-0.358279');
        $javrezac->setInhabitants('646');
        $manager->persist($javrezac);
        
        $louzac_saint_andre = new City();
        $louzac_saint_andre->setInseeCode('16193');
        $louzac_saint_andre->setName('Louzac-Saint-André');
        $louzac_saint_andre->setPostalCode('16100');
        $louzac_saint_andre->setHub($cc_cognac);
        $louzac_saint_andre->setLatitude('45.714911');
        $louzac_saint_andre->setLongitude('-0.402997');
        $louzac_saint_andre->setInhabitants('996');
        $manager->persist($louzac_saint_andre);
        
        $merpins = new City();
        $merpins->setInseeCode('16217');
        $merpins->setName('Merpins');
        $merpins->setPostalCode('16100');
        $merpins->setHub($cc_cognac);
        $merpins->setLatitude('45.673094');
        $merpins->setLongitude('-0.363708');
        $merpins->setInhabitants('1039');
        $manager->persist($merpins);
        
        $mesnac = new City();
        $mesnac->setInseeCode('16218');
        $mesnac->setName('Mesnac');
        $mesnac->setPostalCode('16370');
        $mesnac->setHub($cc_cognac);
        $mesnac->setLatitude('45.776675');
        $mesnac->setLongitude('-0.358558');
        $mesnac->setInhabitants('346');
        $manager->persist($mesnac);
        
        $saint_brice = new City();
        $saint_brice->setInseeCode('16304');
        $saint_brice->setName('Saint-Brice');
        $saint_brice->setPostalCode('16100');
        $saint_brice->setHub($cc_cognac);
        $saint_brice->setLatitude('45.687996');
        $saint_brice->setLongitude('-0.272620');
        $saint_brice->setInhabitants('1072');
        $manager->persist($saint_brice);
        
        $saint_laurent_de_cognac = new City();
        $saint_laurent_de_cognac->setInseeCode('16330');
        $saint_laurent_de_cognac->setName('Saint-Laurent-de-Cognac');
        $saint_laurent_de_cognac->setPostalCode('16100');
        $saint_laurent_de_cognac->setHub($cc_cognac);
        $saint_laurent_de_cognac->setLatitude('45.697139');
        $saint_laurent_de_cognac->setLongitude('-0.408103');
        $saint_laurent_de_cognac->setInhabitants('894');
        $manager->persist($saint_laurent_de_cognac);
        
        $saint_sulpice_de_cognac = new City();
        $saint_sulpice_de_cognac->setInseeCode('16355');
        $saint_sulpice_de_cognac->setName('Saint-Sulpice-de-Cognac');
        $saint_sulpice_de_cognac->setPostalCode('16370');
        $saint_sulpice_de_cognac->setHub($cc_cognac);
        $saint_sulpice_de_cognac->setLatitude('45.760090');
        $saint_sulpice_de_cognac->setLongitude('-0.381303');
        $saint_sulpice_de_cognac->setInhabitants('1252');
        $manager->persist($saint_sulpice_de_cognac);
        
        /* CC du Pays santon **************************************************/
        $cc_pays_santon = new Hub();
        $cc_pays_santon->setName('CC Pays santon');
        $cc_pays_santon->setFullname('Communauté de communes du Pays santon');
        $saintes = new City();
        $saintes->setInseeCode('17415');
        $saintes->setName('Saintes');
        $saintes->setPostalCode('17100');
        $saintes->setLatitude('45.748');
        $saintes->setLongitude('-0.638');
        $cc_pays_santon->setMasterCity($saintes);
        $cc_pays_santon->setIsActive(true);
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
        
        /* CC de Jarnac *******************************************************/
        $cc_jarnac = new Hub();
        $cc_jarnac->setName('CC Jarnac');
        $cc_jarnac->setFullname('Communauté de communes de Jarnac');
        $jarnac = new City();
        $jarnac->setInseeCode('16167');
        $jarnac->setName('Jarnac');
        $jarnac->setPostalCode('16200');
        $jarnac->setLatitude('45.6814');
        $jarnac->setLongitude('-0.1758');
        $cc_jarnac->setMasterCity($jarnac);
        $manager->persist($cc_jarnac);
        $jarnac->setHub($cc_jarnac);
        $manager->persist($jarnac);
        
        $bassac = new City();
        $bassac->setInseeCode('16032');
        $bassac->setName('Bassac');
        $bassac->setPostalCode('16120');
        $bassac->setLatitude('45.6642');
        $bassac->setLongitude('-0.1056');
        $bassac->setInhabitants('545');
        $bassac->setHub($cc_jarnac);
        $manager->persist($bassac);
        
        $bourg_charente = new City();
        $bourg_charente->setInseeCode('16056');
        $bourg_charente->setName('Bourg-Charente');
        $bourg_charente->setPostalCode('16200');
        $bourg_charente->setLatitude('45.6736');
        $bourg_charente->setLongitude('-0.2197');
        $bourg_charente->setInhabitants('739');
        $bourg_charente->setHub($cc_jarnac);
        $manager->persist($bourg_charente);
        
        $chassors = new City();
        $chassors->setInseeCode('16088');
        $chassors->setName('Chassors');
        $chassors->setPostalCode('16200');
        $chassors->setLatitude('45.7119');
        $chassors->setLongitude('-0.2019');
        $chassors->setInhabitants('1111');
        $chassors->setHub($cc_jarnac);
        $manager->persist($chassors);
        
        $fleurac = new City();
        $fleurac->setInseeCode('16139');
        $fleurac->setName('Fleurac');
        $fleurac->setPostalCode('16200');
        $fleurac->setLatitude('45.7217');
        $fleurac->setLongitude('-0.0822');
        $fleurac->setInhabitants('229');
        $fleurac->setHub($cc_jarnac);
        $manager->persist($fleurac);
        
        $foussignac = new City();
        $foussignac->setInseeCode('16145');
        $foussignac->setName('Foussignac');
        $foussignac->setPostalCode('16200');
        $foussignac->setLatitude('45.7142');
        $foussignac->setLongitude('-0.1228');
        $foussignac->setInhabitants('591');
        $foussignac->setHub($cc_jarnac);
        $manager->persist($foussignac);
        
        $gondeville = new City();
        $gondeville->setInseeCode('16153');
        $gondeville->setName('Gondeville');
        $gondeville->setPostalCode('16200');
        $gondeville->setLatitude('45.6719');
        $gondeville->setLongitude('-0.1492');
        $gondeville->setInhabitants('513');
        $gondeville->setHub($cc_jarnac);
        $manager->persist($gondeville);
        
        $houlette = new City();
        $houlette->setInseeCode('16165');
        $houlette->setName('Houlette');
        $houlette->setPostalCode('16200');
        $houlette->setLatitude('45.7611');
        $houlette->setLongitude('-0.2111');
        $houlette->setInhabitants('385');
        $houlette->setHub($cc_jarnac);
        $manager->persist($houlette);
        
        $julienne = new City();
        $julienne->setInseeCode('16174');
        $julienne->setName('Julienne');
        $julienne->setPostalCode('16200');
        $julienne->setLatitude('45.6969');
        $julienne->setLongitude('-0.2294');
        $julienne->setInhabitants('432');
        $julienne->setHub($cc_jarnac);
        $manager->persist($julienne);
        
        $mainxe = new City();
        $mainxe->setInseeCode('16202');
        $mainxe->setName('Mainxe');
        $mainxe->setPostalCode('16200');
        $mainxe->setLatitude('45.6428');
        $mainxe->setLongitude('-0.1881');
        $mainxe->setInhabitants('613');
        $mainxe->setHub($cc_jarnac);
        $manager->persist($mainxe);
        
        $mergignac = new City();
        $mergignac->setInseeCode('16216');
        $mergignac->setName('Mérignac');
        $mergignac->setPostalCode('16200');
        $mergignac->setLatitude('45.6997');
        $mergignac->setLongitude('-0.0792');
        $mergignac->setInhabitants('702');
        $mergignac->setHub($cc_jarnac);
        $manager->persist($mergignac);
        
        $les_metairies = new City();
        $les_metairies->setInseeCode('16220');
        $les_metairies->setName('Les Métairies');
        $les_metairies->setPostalCode('16200');
        $les_metairies->setLatitude('45.7053');
        $les_metairies->setLongitude('-0.1644');
        $les_metairies->setInhabitants('532');
        $les_metairies->setHub($cc_jarnac);
        $manager->persist($les_metairies);
        
        $nercillac = new City();
        $nercillac->setInseeCode('16243');
        $nercillac->setName('Nercillac');
        $nercillac->setPostalCode('16200');
        $nercillac->setLatitude('45.7161');
        $nercillac->setLongitude('-0.245');
        $nercillac->setInhabitants('1019');
        $nercillac->setHub($cc_jarnac);
        $manager->persist($nercillac);
        
        $reparsac = new City();
        $reparsac->setInseeCode('16277');
        $reparsac->setName('Réparsac');
        $reparsac->setPostalCode('16200');
        $reparsac->setLatitude('45.7311');
        $reparsac->setLongitude('-0.235');
        $reparsac->setInhabitants('570');
        $reparsac->setHub($cc_jarnac);
        $manager->persist($reparsac);
        
        $saint_meme_les_carrieres = new City();
        $saint_meme_les_carrieres->setInseeCode('16340');
        $saint_meme_les_carrieres->setName('Saint-Même-les-Carrières');
        $saint_meme_les_carrieres->setPostalCode('16720');
        $saint_meme_les_carrieres->setLatitude('45.6464');
        $saint_meme_les_carrieres->setLongitude('-0.1411');
        $saint_meme_les_carrieres->setInhabitants('1092');
        $saint_meme_les_carrieres->setHub($cc_jarnac);
        $manager->persist($saint_meme_les_carrieres);
        
        $sigogne = new City();
        $sigogne->setInseeCode('16369');
        $sigogne->setName('Sigogne');
        $sigogne->setPostalCode('16200');
        $sigogne->setLatitude('45.7378');
        $sigogne->setLongitude('-0.1569');
        $sigogne->setInhabitants('1009');
        $sigogne->setHub($cc_jarnac);
        $manager->persist($sigogne);
        
        $sainte_severe = new City();
        $sainte_severe->setInseeCode('16349');
        $sainte_severe->setName('Sainte-Sévère');
        $sainte_severe->setPostalCode('16200');
        $sainte_severe->setLatitude('45.7536');
        $sainte_severe->setLongitude('-0.2372');
        $sainte_severe->setInhabitants('541');
        $sainte_severe->setHub($cc_jarnac);
        $manager->persist($sainte_severe);
        
        $triac_lautrait = new City();
        $triac_lautrait->setInseeCode('16387');
        $triac_lautrait->setName('Triac-Lautrait');
        $triac_lautrait->setPostalCode('16200');
        $triac_lautrait->setLatitude('45.6906');
        $triac_lautrait->setLongitude('-0.1253');
        $triac_lautrait->setInhabitants('444');
        $triac_lautrait->setHub($cc_jarnac);
        $manager->persist($triac_lautrait);
        
        /* Save all Hubs and Cities *******************************************/
        $manager->flush();
    }
 
    public function getOrder()
    {
        return 1; 
    }
}

