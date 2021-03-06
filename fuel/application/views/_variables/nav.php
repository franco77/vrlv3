<?php 
/****************************************************************************************
// EXAMPLE:
$nav['about'] = 'About';
$nav['showcase'] = array('label' => 'Showcase', 'active' => 'showcase$|showcase/:any');
$nav['blog'] = array('label' => 'Blog', 'active' => 'blog$|blog/:any');
$nav['contact'] = 'Contact';

// about sub menu
$nav['about/services'] = array('label' => 'Services', 'parent_id' => 'about');
$nav['about/team'] = array('label' => 'Team', 'parent_id' => 'about');
$nav['about/what-they-say'] = array('label' => 'What They Say', 'parent_id' => 'about');
*****************************************************************************************/
$nav = array();
//Ylämenu
$nav['liitto'] = array('label' => 'Liitto', 'active' => 'liitto$|liitto/:any');
$nav['jasenyys'] = array('label' => 'Jäsenyys', 'active' => 'jasenyys$|jasenyys/:any');
$nav['tallit'] = array('label' => 'Virtuaalitallit', 'active' => 'tallit$|tallit/:any'); //Koodattavaa: Tallihaku
$nav['virtuaalihevoset'] = array('label' => 'Virtuaalihevoset', 'active' => 'virtuaalihevoset$|virtuaalihevoset/:any'); //Koodattavaa: Hevoshaku
$nav['kasvatus'] = array('label' => 'Kasvatus', 'active' => 'kasvatus$|kasvatus/:any'); //Koodattavaa: Hevoshaku
$nav['kilpailutoiminta'] = 'Kilpailutoiminta';
$nav['nayttelytoiminta'] = 'Näyttelytoiminta';
//Piilotetut
$nav['yllapito'] = array('label'=>'Ylläpito', 'hidden'=> TRUE, 'active' => 'yllapito$|yllapito/:any');
$nav['profiili'] = array('label'=>'Profiili', 'hidden'=> TRUE, 'active' => 'profiili');

//Liitto alamenu
$nav['liitto/tiedotukset'] = array('label' => 'Tiedotukset', 'parent_id' => 'liitto', 'active' => 'tiedotukset'); 
$nav['liitto/yllapito'] = array('label' => 'Ylläpito ja yhteydenotto', 'parent_id' => 'liitto', 'active' => 'liitto/yllapito'); //Koodattavaa: työntekijöiden listaus
$nav['liitto/wiki'] = array('label' => 'Virtuaaliwiki', 'parent_id' => 'liitto', 'active' => 'liitto/wiki');
$nav['liitto/somessa'] = array('label' => 'VRL sosiaalisessa mediassa', 'parent_id' => 'liitto', 'active' => 'liitto/somessa');
$nav['liitto/mainosta'] = array('label' => 'Mainosta sivuillamme!', 'parent_id' => 'liitto', 'active' => 'liitto/mainosta');
$nav['liitto/copyright'] = array('label' => 'Tekijänoikeudet', 'parent_id' => 'liitto', 'active' => 'liitto/copyright');
//Kehitysblogi, porkkanat, Virma, tuki, kehitysblogi
 
// jäsenyys alamenu
$nav['jasenyys/liity'] = array('label' => 'Liity jäseneksi', 'parent_id' => 'jasenyys', 'active' => 'jasenyys/liity');
$nav['jasenyys/rekisteriseloste'] = array('label' => 'Rekisteriseloste', 'parent_id' => 'jasenyys', 'active' => 'jasenyys/rekisteriseloste');
// virtuaalitallit alamenu
$nav['tallit/haku'] = array('label' => 'Tallihaku', 'parent_id' => 'tallit', 'active' => 'tallit');
$nav['tallit/rekisterointi'] = array('label' => 'Tallin rekisteröinti', 'parent_id' => 'tallit', 'active' => 'tallit/rekisterointi');
$nav['tallit/omat'] = array('label' => 'Omat tallit', 'parent_id' => 'tallit', 'active' => 'tallit/omat');
$nav['tallit/uusimmat'] = array('label' => 'Uusimmat tallit', 'parent_id' => 'tallit', 'active' => 'tallit/uusimmat'); //Koodattavaa: Uusimpien rekattujen tallien lista
$nav['tallit/paivitetyt'] = array('label' => 'Viimeksi päivitetyt tallit', 'parent_id' => 'tallit', 'active' => 'tallit/paivitetyt'); //Koodattavaa: Viimeksi päivitetyt tallit
//virtuaalihevoset alamenu
$nav['virtuaalihevoset/rekisterointi'] = array('label' => 'Hevosten rekisteröinti', 'parent_id' => 'virtuaalihevoset', 'active' => 'virtuaalihevoset/rekisterointi'); //Koodattavaa: Rekisteröintilomake
$nav['virtuaalihevoset/statistiikka'] = array('label' => 'Statistiikka', 'parent_id' => 'virtuaalihevoset', 'active' => 'virtuaalihevoset/statistiikka'); //Koodattavaa: Statistiikat
$nav['virtuaalihevoset/ikaantyminen'] = array('label' => 'Hevosten ikääntyminen', 'parent_id' => 'virtuaalihevoset', 'active' => 'virtuaalihevoset/ikaantyminen'); //Koodattavaa: Syntymämaat
$nav['virtuaalihevoset/rodut'] = array('label' => 'Rotulista', 'parent_id' => 'virtuaalihevoset', 'active' => 'virtuaalihevoset/rotulista'); //Koodattavaa: Rotulistat
$nav['virtuaalihevoset/varit'] = array('label' => 'Värilista', 'parent_id' => 'virtuaalihevoset', 'active' => 'virtuaalihevoset/varilista'); //Koodattavaa: Värit
$nav['virtuaalihevoset/syntymamaat'] = array('label' => 'Syntymämaalista', 'parent_id' => 'virtuaalihevoset', 'active' => 'virtuaalihevoset/syntymamaat'); //Koodattavaa: Syntymämaat
//jalostus ja kasvatus alamenu
$nav['kasvatus/kasvattajanimihaku'] = array('label' => 'Kasvattajanimirekisteri', 'parent_id' => 'kasvatus', 'active' => 'kasvatus/kasvattajanimihaku'); //Koodattavaa: Syntymämaat
$nav['kasvatus/jalostusmainokset'] = array('label' => 'Jalostusmainokset', 'parent_id' => 'kasvatus', 'active' => 'kasvatus/jalostusmainokset');
$nav['kasvatus/rotuyhdistykset'] = array('label' => 'Rotuyhdistykset', 'parent_id' => 'kasvatus', 'active' => 'kasvatus/rotuyhdistykset');
//kantakirjat, laatikset, rekkaa kasvinimi
//kilpailutoiminta alamenu
$nav['kilpailutoiminta/kilpailusaannot'] = array('label' => 'Kilpaileminen ja säännöt', 'parent_id' => 'kilpailutoiminta', 'active' => 'kilpailutoiminta/kilpailusaannot');
$nav['kilpailutoiminta/kilpailujaokset'] = array('label' => 'Jaokset', 'parent_id' => 'kilpailutoiminta', 'active' => 'kilpailutoiminta/jaokset');
$nav['kilpailutoiminta/kilpailukalenteri'] = array('label' => 'Kilpailukalenteri', 'parent_id' => 'kilpailutoiminta', 'active' => 'kilpailutoiminta/kilpailukalenteri');
$nav['kilpailutoiminta/porrastetut'] = array('label' => 'Porrastetut kilpailut', 'parent_id' => 'kilpailutoiminta', 'active' => 'kilpailutoiminta/porrastetut');
$nav['kilpailutoiminta/jarjestaminen'] = array('label' => 'Kilpailujen järjestäminen', 'parent_id' => 'kilpailutoiminta', 'active' => 'kilpailutoiminta/jarjestaminen');
$nav['kilpailutoiminta/seurat'] = array('label' => 'Seurarekisteri', 'parent_id' => 'kilpailutoiminta', 'active' => 'kilpailutoiminta/seurat');
//porrastettujen jutut, anomisen jutut jne jne
//nayttelytoiminta alamenu
$nav['kilpailutoiminta/saannot'] = array('label' => 'Näyttelysäännöt', 'parent_id' => 'nayttelytoiminta', 'active' => 'nayttelytoiminta/saannot');
$nav['kilpailutoiminta/nayttelykalenteri'] = array('label' => 'Näyttelykalenteri', 'parent_id' => 'nayttelytoiminta', 'active' => 'nayttelytoiminta/nayttelykalenteri');
$nav['kilpailutoiminta/bislista'] = array('label' => 'BIS-lista', 'parent_id' => 'nayttelytoiminta', 'active' => 'nayttelytoiminta/bislista');
$nav['kilpailutoiminta/nayttelyiden-kermaa'] = array('label' => 'Näyttelyiden kermaa', 'parent_id' => 'nayttelytoiminta', 'active' => 'nayttelytoiminta/nayttelyiden-kermaa');
$nav['kilpailutoiminta/jarjestaminen'] = array('label' => 'Näyttelyiden järjestäminen', 'parent_id' => 'nayttelytoiminta', 'active' => 'nayttelytoiminta/jarjestaminen');

// ylläpito alamenu
$nav['yllapito/tunnukset'] = array('label' => 'Tunnukset', 'parent_id' => 'yllapito', 'active' => 'yllapito/tunnukset');
$nav['yllapito/tallirekisteri'] = array('label' => 'Tallirekisteri', 'parent_id' => 'yllapito', 'active' => 'yllapito/tallirekisteri');
//$nav['yllapito/hevosrekisteri'] = array('label' => 'Hevosrekisteri', 'parent_id' => 'yllapito', 'active' => 'yllapito/hevosrekisteri');
    
// ylläpito/tunnukset alamenu
$nav['yllapito/tunnukset/hyvaksy'] = array('label' => 'Hyväksy VRL-tunnuksia', 'parent_id' => 'yllapito/tunnukset', 'active' => 'yllapito/tunnukset/hyvaksy');
$nav['yllapito/tunnukset/muokkaa'] = array('label' => 'Muokkaa tunnuksen tietoja', 'parent_id' => 'yllapito/tunnukset', 'active' => 'yllapito/tunnukset/muokkaa');
$nav['tunnukset'] = array('label' => 'Tee hakuja tunnuksista', 'parent_id' => 'yllapito/tunnukset', 'active' => 'yllapito/tunnukset/haku');

$nav['yllapito/tallirekisteri/hyvaksy'] = array('label' => 'Hyväksy talleja', 'parent_id' => 'yllapito/tallirekisteri', 'active' => 'yllapito/tallirekisteri/hyvaksy');
$nav['yllapito/tallirekisteri/muokkaa'] = array('label' => 'Muokkaa talleja', 'parent_id' => 'yllapito/tallirekisteri', 'active' => 'yllapito/tallirekisteri/muokkaa');

// profiili alamenu
$nav['profiili/hevoset'] = array('label' => 'Omat hevoset', 'parent_id' => 'profiili', 'active' => 'profiili/hevoset');
$nav['profiili/tallit'] = array('label' => 'Omat tallit', 'parent_id' => 'profiili', 'active' => 'profiili/tallit');
$nav['profiili/kasvattajanimet'] = array('label' => 'Omat kasvattajanimet', 'parent_id' => 'profiili', 'active' => 'profiili/kasvattajanimet');
$nav['profiili/seurat'] = array('label' => 'Omat seurat', 'parent_id' => 'profiili', 'active' => 'profiili/seurat');
//$nav['profiili/puljut'] = array('label' => 'Omat puljut', 'parent_id' => 'profiili', 'active' => 'profiili/omat-puljut');
$nav['profiili/kilpailut'] = array('label' => 'Omat kilpailut', 'parent_id' => 'profiili', 'active' => 'profiili/kilpailut');

