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
        
        /* CC de la région de Châteauneuf *************************************/
        $cc_chateauneuf = new Hub();
        $cc_chateauneuf->setName('CC Région Châteauneuf');
        $cc_chateauneuf->setFullname('Communauté de communes de la région de Châteauneuf');
        $chateauneuf_sur_charente = new City();
        $chateauneuf_sur_charente->setInseeCode('16090');
        $chateauneuf_sur_charente->setName('Châteauneuf-sur-Charente');
        $chateauneuf_sur_charente->setPostalCode('16120');
        $chateauneuf_sur_charente->setLatitude('45.5994');
        $chateauneuf_sur_charente->setLongitude('-0.0525');
        $chateauneuf_sur_charente->setInhabitants('3422');
        $cc_chateauneuf->setMasterCity($chateauneuf_sur_charente);
        $manager->persist($cc_chateauneuf);
        $chateauneuf_sur_charente->setHub($cc_chateauneuf);
        $manager->persist($chateauneuf_sur_charente);
        
        $angeac_charente = new City();
        $angeac_charente->setInseeCode('16013');
        $angeac_charente->setName('Angeac-Charente');
        $angeac_charente->setPostalCode('16120');
        $angeac_charente->setLatitude('45.6314');
        $angeac_charente->setLongitude('-0.0739');
        $angeac_charente->setInhabitants('380');
        $angeac_charente->setHub($cc_chateauneuf);
        $manager->persist($angeac_charente);
        
        $bonneuil = new City();
        $bonneuil->setInseeCode('16050');
        $bonneuil->setName('Bonneuil');
        $bonneuil->setPostalCode('16120');
        $bonneuil->setLatitude('45.5769');
        $bonneuil->setLongitude('-0.1389');
        $bonneuil->setInhabitants('254');
        $bonneuil->setHub($cc_chateauneuf);
        $manager->persist($bonneuil);
        
        $bouteville = new City();
        $bouteville->setInseeCode('16057');
        $bouteville->setName('Bouteville');
        $bouteville->setPostalCode('16120');
        $bouteville->setLatitude('45.6003');
        $bouteville->setLongitude('-0.135');
        $bouteville->setInhabitants('336');
        $bouteville->setHub($cc_chateauneuf);
        $manager->persist($bouteville);
        
        $champmillon = new City();
        $champmillon->setInseeCode('16077');
        $champmillon->setName('Champmillon');
        $champmillon->setPostalCode('16290');
        $champmillon->setLatitude('45.6397');
        $champmillon->setLongitude('0.0006');
        $champmillon->setInhabitants('526');
        $champmillon->setHub($cc_chateauneuf);
        $manager->persist($champmillon);
        
        $graves_saint_amant = new City();
        $graves_saint_amant->setInseeCode('16297');
        $graves_saint_amant->setName('Graves-Saint-Amant');
        $graves_saint_amant->setPostalCode('16120');
        $graves_saint_amant->setLatitude('45.6444');
        $graves_saint_amant->setLongitude('-0.0928');
        $graves_saint_amant->setInhabitants('317');
        $graves_saint_amant->setHub($cc_chateauneuf);
        $manager->persist($graves_saint_amant);
        
        $hiersac = new City();
        $hiersac->setInseeCode('16163');
        $hiersac->setName('Hiersac');
        $hiersac->setPostalCode('16290');
        $hiersac->setLatitude('45.6694');
        $hiersac->setLongitude('0.0056');
        $hiersac->setInhabitants('1074');
        $hiersac->setHub($cc_chateauneuf);
        $manager->persist($hiersac);
        
        $mosnac = new City();
        $mosnac->setInseeCode('16233');
        $mosnac->setName('Mosnac');
        $mosnac->setPostalCode('16120');
        $mosnac->setLatitude('45.6197');
        $mosnac->setLongitude('-0.0178');
        $mosnac->setInhabitants('458');
        $mosnac->setHub($cc_chateauneuf);
        $manager->persist($mosnac);
        
        $moulidars = new City();
        $moulidars->setInseeCode('16234');
        $moulidars->setName('Moulinars');
        $moulidars->setPostalCode('16290');
        $moulidars->setLatitude('45.6622');
        $moulidars->setLongitude('-0.0367');
        $moulidars->setInhabitants('717');
        $moulidars->setHub($cc_chateauneuf);
        $manager->persist($moulidars);
        
        $nonaville = new City();
        $nonaville->setInseeCode('16247');
        $nonaville->setName('Nonaville');
        $nonaville->setPostalCode('16120');
        $nonaville->setLatitude('45.5272');
        $nonaville->setLongitude('-0.0919');
        $nonaville->setInhabitants('190');
        $nonaville->setHub($cc_chateauneuf);
        $manager->persist($nonaville);
        
        $saint_simeux = new City();
        $saint_simeux->setInseeCode('16351');
        $saint_simeux->setName('Saint-Simeux');
        $saint_simeux->setPostalCode('16120');
        $saint_simeux->setLatitude('45.6286');
        $saint_simeux->setLongitude('-0.025');
        $saint_simeux->setInhabitants('517');
        $saint_simeux->setHub($cc_chateauneuf);
        $manager->persist($saint_simeux);
        
        $saint_simon = new City();
        $saint_simon->setInseeCode('16352');
        $saint_simon->setName('Saint-Simon');
        $saint_simon->setPostalCode('16120');
        $saint_simon->setLatitude('45.64928901085989');
        $saint_simon->setLongitude('-0.07555246353149414');
        $saint_simon->setInhabitants('209');
        $saint_simon->setHub($cc_chateauneuf);
        $manager->persist($saint_simon);
        
        $vibrac = new City();
        $vibrac->setInseeCode('16402');
        $vibrac->setName('Vibrac');
        $vibrac->setPostalCode('16120');
        $vibrac->setLatitude('45.6439');
        $vibrac->setLongitude('-0.0617');
        $vibrac->setInhabitants('296');
        $vibrac->setHub($cc_chateauneuf);
        $manager->persist($vibrac);
        
        /* CC de Grande Champagne ******* *************************************/
        $cc_grande_champagne = new Hub();
        $cc_grande_champagne->setName('CC Grande Champagne');
        $cc_grande_champagne->setFullname('Communauté de communes de Grande Champagne');
        $segonzac = new City();
        $segonzac->setInseeCode('16366');
        $segonzac->setName('Segonzac');
        $segonzac->setPostalCode('16130');
        $segonzac->setLatitude('45.6181');
        $segonzac->setLongitude('-0.2175');
        $segonzac->setInhabitants('2166');
        $cc_grande_champagne->setMasterCity($segonzac);
        $manager->persist($cc_grande_champagne);
        $segonzac->setHub($cc_grande_champagne);
        $manager->persist($segonzac);
        
        $ambleville = new City();
        $ambleville->setInseeCode('16010');
        $ambleville->setName('Ambleville');
        $ambleville->setPostalCode('16300');
        $ambleville->setLatitude('45.5586');
        $ambleville->setLongitude('-0.2211');
        $ambleville->setInhabitants('197');
        $ambleville->setHub($cc_grande_champagne);
        $manager->persist($ambleville);
        
        $angeac_champagne = new City();
        $angeac_champagne->setInseeCode('16012');
        $angeac_champagne->setName('Angeac-Champagne');
        $angeac_champagne->setPostalCode('16130');
        $angeac_champagne->setLatitude('45.6083');
        $angeac_champagne->setLongitude('-0.2964');
        $angeac_champagne->setInhabitants('510');
        $angeac_champagne->setHub($cc_grande_champagne);
        $manager->persist($angeac_champagne);
        
        $criteuil_la_magdeleine = new City();
        $criteuil_la_magdeleine->setInseeCode('16116');
        $criteuil_la_magdeleine->setName('Criteuil-la-Magdeleine');
        $criteuil_la_magdeleine->setPostalCode('16300');
        $criteuil_la_magdeleine->setLatitude('45.5375');
        $criteuil_la_magdeleine->setLongitude('-0.215');
        $criteuil_la_magdeleine->setInhabitants('435');
        $criteuil_la_magdeleine->setHub($cc_grande_champagne);
        $manager->persist($criteuil_la_magdeleine);
        
        $gensac_la_pallue = new City();
        $gensac_la_pallue->setInseeCode('16150');
        $gensac_la_pallue->setName('Gensac-la-Pallue');
        $gensac_la_pallue->setPostalCode('16130');
        $gensac_la_pallue->setLatitude('45.6517');
        $gensac_la_pallue->setLongitude('-0.2514');
        $gensac_la_pallue->setInhabitants('1604');
        $gensac_la_pallue->setHub($cc_grande_champagne);
        $manager->persist($gensac_la_pallue);
        
        $gente = new City();
        $gente->setInseeCode('16151');
        $gente->setName('Genté');
        $gente->setPostalCode('16130');
        $gente->setLatitude('45.6286');
        $gente->setLongitude('-0.3125');
        $gente->setInhabitants('877');
        $gente->setHub($cc_grande_champagne);
        $manager->persist($gente);
        
        $juillac_le_coq = new City();
        $juillac_le_coq->setInseeCode('16171');
        $juillac_le_coq->setName('Jullac-le-Coq');
        $juillac_le_coq->setPostalCode('16130');
        $juillac_le_coq->setLatitude('45.59');
        $juillac_le_coq->setLongitude('-0.2597');
        $juillac_le_coq->setInhabitants('669');
        $juillac_le_coq->setHub($cc_grande_champagne);
        $manager->persist($juillac_le_coq);
        
        $lignieres_sonneville = new City();
        $lignieres_sonneville->setInseeCode('16186');
        $lignieres_sonneville->setName('Lignières-Sonneville');
        $lignieres_sonneville->setPostalCode('16130');
        $lignieres_sonneville->setLatitude('45.5597');
        $lignieres_sonneville->setLongitude('-0.1817');
        $lignieres_sonneville->setInhabitants('593');
        $lignieres_sonneville->setHub($cc_grande_champagne);
        $manager->persist($lignieres_sonneville);
        
        $saint_fort_sur_le_ne = new City();
        $saint_fort_sur_le_ne->setInseeCode('16316');
        $saint_fort_sur_le_ne->setName('Saint-Fort-sur-le-Né');
        $saint_fort_sur_le_ne->setPostalCode('16130');
        $saint_fort_sur_le_ne->setLatitude('45.5781');
        $saint_fort_sur_le_ne->setLongitude('-0.3039');
        $saint_fort_sur_le_ne->setInhabitants('399');
        $saint_fort_sur_le_ne->setHub($cc_grande_champagne);
        $manager->persist($saint_fort_sur_le_ne);
        
        $saint_preuil = new City();
        $saint_preuil->setInseeCode('16343');
        $saint_preuil->setName('Saint-Preuil');
        $saint_preuil->setPostalCode('16130');
        $saint_preuil->setLatitude('45.5969');
        $saint_preuil->setLongitude('-0.1708');
        $saint_preuil->setInhabitants('300');
        $saint_preuil->setHub($cc_grande_champagne);
        $manager->persist($saint_preuil);
        
        $salles_d_angles = new City();
        $salles_d_angles->setInseeCode('16359');
        $salles_d_angles->setName('Salles-d\'Angles');
        $salles_d_angles->setPostalCode('16130');
        $salles_d_angles->setLatitude('45.6192');
        $salles_d_angles->setLongitude('-0.3319');
        $salles_d_angles->setInhabitants('1092');
        $salles_d_angles->setHub($cc_grande_champagne);
        $manager->persist($salles_d_angles);
        
        $verrieres = new City();
        $verrieres->setInseeCode('16399');
        $verrieres->setName('Verrières');
        $verrieres->setPostalCode('16130');
        $verrieres->setLatitude('45.5719');
        $verrieres->setLongitude('-0.2653');
        $verrieres->setInhabitants('370');
        $verrieres->setHub($cc_grande_champagne);
        $manager->persist($verrieres);
        
/* BusStops *******************************************************************/
        /* Saintes ************************************************************/
        $gare_sncf_saintes = new BusStop();
        $gare_sncf_saintes->setCity($saintes);
        $gare_sncf_saintes->setName('Gare SNCF de Saintes');
        $gare_sncf_saintes->setIsFamous(true);
        $gare_sncf_saintes->setIsTrainConnected(true);
        $gare_sncf_saintes->setLatitude('45.748723405906226');
        $gare_sncf_saintes->setLongitude('-0.6182518601417542');
        $manager->persist($gare_sncf_saintes);
        
        /* Saint-Sever-de-Saintonge *******************************************/
        $gare_sncf_beillant = new BusStop();
        $gare_sncf_beillant->setCity($saint_sever_de_saintonge);
        $gare_sncf_beillant->setName('Gare SNCF de Beillant');
        $gare_sncf_beillant->setIsFamous(true);
        $gare_sncf_beillant->setIsTrainConnected(true);
        $gare_sncf_beillant->setLatitude('45.70036678883351');
        $gare_sncf_beillant->setLongitude('-0.5264666676521301');
        $manager->persist($gare_sncf_beillant);
        
        /* Cognac *************************************************************/
        $gare_sncf_cognac = new BusStop();
        $gare_sncf_cognac->setCity($cognac);
        $gare_sncf_cognac->setName('Gare SNCF de Cognac');
        $gare_sncf_cognac->setIsFamous(true);
        $gare_sncf_cognac->setIsTrainConnected(true);
        $gare_sncf_cognac->setLatitude('45.68477889792381');
        $gare_sncf_cognac->setLongitude('-0.3258964419364929');
        $manager->persist($gare_sncf_cognac);
        
        /* Jarnac *************************************************************/
        $gare_sncf_jarnac = new BusStop();
        $gare_sncf_jarnac->setCity($jarnac);
        $gare_sncf_jarnac->setName('Gare SNCF de Jarnac');
        $gare_sncf_jarnac->setIsFamous(true);
        $gare_sncf_jarnac->setIsTrainConnected(true);
        $gare_sncf_jarnac->setLatitude('45.67148079266166');
        $gare_sncf_jarnac->setLongitude('-0.17760783433914185');
        $manager->persist($gare_sncf_jarnac);
        
        /* Cognac *************************************************************/
        $gare_sncf_chateauneuf = new BusStop();
        $gare_sncf_chateauneuf->setCity($chateauneuf_sur_charente);
        $gare_sncf_chateauneuf->setName('Gare SNCF de Châteauneuf');
        $gare_sncf_chateauneuf->setIsFamous(true);
        $gare_sncf_chateauneuf->setIsTrainConnected(true);
        $gare_sncf_chateauneuf->setLatitude('45.59973914505817');
        $gare_sncf_chateauneuf->setLongitude('-0.05057036876678467');
        $manager->persist($gare_sncf_chateauneuf);
        
/* TrainStations **************************************************************/
        $gare_saintes = new TrainStation();
        $gare_saintes->setBusStop($gare_sncf_saintes);
        $gare_saintes->setIsWheelchairAccessible(true);
        $manager->persist($gare_saintes);
        
        $gare_beillant = new TrainStation();
        $gare_beillant->setBusStop($gare_sncf_beillant);
        $manager->persist($gare_beillant);
        
        $gare_cognac = new TrainStation();
        $gare_cognac->setBusStop($gare_sncf_cognac);
        $gare_cognac->setIsWheelchairAccessible(true);
        $manager->persist($gare_cognac);
        
        $gare_jarnac = new TrainStation();
        $gare_jarnac->setBusStop($gare_sncf_jarnac);
        $manager->persist($gare_jarnac);
        
        $gare_chateauneuf = new TrainStation();
        $gare_chateauneuf->setBusStop($gare_sncf_chateauneuf);
        $manager->persist($gare_chateauneuf);
        
/* TrainTravels ***************************************************************/

        /* Saintes > Châteauneuf **********************************************/
        $train_travel_saintes_chateauneuf = new TrainTravel();
        $train_travel_saintes_chateauneuf->setImplementationDate(date_create('2011-05-07 00:00:00'));
        $train_travel_saintes_chateauneuf->setExpirationDate(date_create('2011-12-10 23:59:59'));
        $manager->persist($train_travel_saintes_chateauneuf);
        
        /* Châteauneuf > Saintes **********************************************/
        $train_travel_chateauneuf_saintes = new TrainTravel();
        $train_travel_chateauneuf_saintes->setImplementationDate(date_create('2011-05-07 00:00:00'));
        $train_travel_chateauneuf_saintes->setExpirationDate(date_create('2011-12-10 23:59:59'));
        $manager->persist($train_travel_chateauneuf_saintes);
        
/* TrainSteps *****************************************************************/

        /* Saintes > Châteauneuf **********************************************/
        $train_step_saintes_chateauneuf1 = new TrainStep();
        $train_step_saintes_chateauneuf1->setTrainTravel($train_travel_saintes_chateauneuf);
        $train_step_saintes_chateauneuf1->setTrainStation($gare_saintes);
        $train_step_saintes_chateauneuf1->setPosition(1);
        $manager->persist($train_step_saintes_chateauneuf1);
        
        $train_step_saintes_chateauneuf2 = new TrainStep();
        $train_step_saintes_chateauneuf2->setTrainTravel($train_travel_saintes_chateauneuf);
        $train_step_saintes_chateauneuf2->setTrainStation($gare_beillant);
        $train_step_saintes_chateauneuf2->setPosition(2);
        $manager->persist($train_step_saintes_chateauneuf2);
        
        $train_step_saintes_chateauneuf3 = new TrainStep();
        $train_step_saintes_chateauneuf3->setTrainTravel($train_travel_saintes_chateauneuf);
        $train_step_saintes_chateauneuf3->setTrainStation($gare_cognac);
        $train_step_saintes_chateauneuf3->setPosition(3);
        $manager->persist($train_step_saintes_chateauneuf3);
        
        $train_step_saintes_chateauneuf4 = new TrainStep();
        $train_step_saintes_chateauneuf4->setTrainTravel($train_travel_saintes_chateauneuf);
        $train_step_saintes_chateauneuf4->setTrainStation($gare_jarnac);
        $train_step_saintes_chateauneuf4->setPosition(4);
        $manager->persist($train_step_saintes_chateauneuf4);
        
        $train_step_saintes_chateauneuf5 = new TrainStep();
        $train_step_saintes_chateauneuf5->setTrainTravel($train_travel_saintes_chateauneuf);
        $train_step_saintes_chateauneuf5->setTrainStation($gare_chateauneuf);
        $train_step_saintes_chateauneuf5->setPosition(5);
        $manager->persist($train_step_saintes_chateauneuf5);
        
        /* Châteauneuf > Saintes **********************************************/
        $train_step_chateauneuf_saintes1 = new TrainStep();
        $train_step_chateauneuf_saintes1->setTrainTravel($train_travel_chateauneuf_saintes);
        $train_step_chateauneuf_saintes1->setTrainStation($gare_chateauneuf);
        $train_step_chateauneuf_saintes1->setPosition(1);
        $manager->persist($train_step_chateauneuf_saintes1);
        
        $train_step_chateauneuf_saintes2 = new TrainStep();
        $train_step_chateauneuf_saintes2->setTrainTravel($train_travel_chateauneuf_saintes);
        $train_step_chateauneuf_saintes2->setTrainStation($gare_jarnac);
        $train_step_chateauneuf_saintes2->setPosition(2);
        $manager->persist($train_step_chateauneuf_saintes2);
        
        $train_step_chateauneuf_saintes3 = new TrainStep();
        $train_step_chateauneuf_saintes3->setTrainTravel($train_travel_chateauneuf_saintes);
        $train_step_chateauneuf_saintes3->setTrainStation($gare_cognac);
        $train_step_chateauneuf_saintes3->setPosition(3);
        $manager->persist($train_step_chateauneuf_saintes3);
        
        $train_step_chateauneuf_saintes4 = new TrainStep();
        $train_step_chateauneuf_saintes4->setTrainTravel($train_travel_chateauneuf_saintes);
        $train_step_chateauneuf_saintes4->setTrainStation($gare_beillant);
        $train_step_chateauneuf_saintes4->setPosition(4);
        $manager->persist($train_step_chateauneuf_saintes4);
        
        $train_step_chateauneuf_saintes5 = new TrainStep();
        $train_step_chateauneuf_saintes5->setTrainTravel($train_travel_chateauneuf_saintes);
        $train_step_chateauneuf_saintes5->setTrainStation($gare_saintes);
        $train_step_chateauneuf_saintes5->setPosition(5);
        $manager->persist($train_step_chateauneuf_saintes5);
           
/* Save all *******************************************************************/
        $manager->flush();
    }
 
    public function getOrder()
    {
        return 1; 
    }
}
      /*
        $xxx = new City();
        $xxx->setInseeCode('');
        $xxx->setName('');
        $xxx->setPostalCode('');
        $xxx->setLatitude('');
        $xxx->setLongitude('');
        $xxx->setInhabitants('');
        $xxx->setHub($yyy);
        $manager->persist($xxx);
        */