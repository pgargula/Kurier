<?php
include('dbConnect.php');
include('../php/session.php');
$id_transakcji=$_SESSION['id_transakcji'];


$q=mysqli_query($link,"SELECT ID_UZYTKOWNIK, ID_KURIER, ID_ADRES_NAD, ID_ADRES_ODB, ID_PRZESYLKA, STAN, NR_PACZKI FROM TRANSAKCJE WHERE ID_TRANSAKCJE='$id_transakcji';"); 

while ($tabl = mysqli_fetch_assoc($q)){
    
    $idnadawca=$tabl['ID_UZYTKOWNIK'];
    $idkurier=$tabl['ID_KURIER'];
    $idadresnad=$tabl['ID_ADRES_NAD'];
    $idadresod=$tabl['ID_ADRES_ODB'];
    $idprzesylka=$tabl['ID_PRZESYLKA'];
    $stan=$tabl['STAN'];
    $nrpaczki=$tabl['NR_PACZKI'];
};

$przesylka=mysqli_query($link,"SELECT WYSOKOSC, DLUGOSC, SZEROKOSC, WAGA, CENA, TYP FROM PRZESYLKA WHERE ID_PRZESYLKA='$idprzesylka';");

while ($tabprzesylka = mysqli_fetch_assoc($przesylka)){
   
    $wysokosc=$tabprzesylka['WYSOKOSC'];
    $szerokosc=$tabprzesylka['DLUGOSC'];
    $dlugosc=$tabprzesylka['SZEROKOSC'];
    $waga=$tabprzesylka['WAGA'];
    $typ=$tabprzesylka['TYP'];
    $cena=$tabprzesylka['CENA'];
};



$adresnadquery=mysqli_query($link,"SELECT MIASTO, ULICA, NR_MIESZ, KOD_POCZTOWY FROM Adres WHERE ID_ADRES='$idadresnad';");

while ($tabadresnad = mysqli_fetch_assoc($adresnadquery)){
   
    $miastonad=$tabadresnad['MIASTO'];
    $ulicanad=$tabadresnad['ULICA'];
    $nrmiesznad=$tabadresnad['NR_MIESZ'];
    $kodnad=$tabadresnad['KOD_POCZTOWY'];
};


$adresodquery=mysqli_query($link,"SELECT MIASTO, ULICA, NR_MIESZ, KOD_POCZTOWY FROM Adres WHERE ID_ADRES='$idadresod';");

while ($tabadresod = mysqli_fetch_assoc($adresodquery)){
   
    $miastood=$tabadresod['MIASTO'];
    $ulicaod=$tabadresod['ULICA'];
    $nrmieszod=$tabadresod['NR_MIESZ'];
    $kodod=$tabadresod['KOD_POCZTOWY'];
};

$nadawcaquery=mysqli_query($link,"SELECT LOGIN FROM UZYTKOWNICY WHERE ID_UZYTKOWNIK='$idnadawca';");
while ($tabnad = mysqli_fetch_assoc($nadawcaquery)){
$nadawca=$tabnad['LOGIN'];;
}
/*
echo
$waga,
$typ,
$cena,
$wysokosc,
$szerokosc,
$dlugosc,
$miastonad,
$ulicanad,
$nrmiesznad,
$kodnad,
$miastood,
$ulicaod,
$nrmieszod,
$kodod,
$nrpaczki;*/

$result[]= array( 'cena' => $cena, 'typ' => $typ, 'waga' => $waga, 'wysokosc' => $wysokosc, 'szerokosc' => $szerokosc, 'dlugosc' => $dlugosc, 'miastonad' => $miastonad, 'ulicanad' => $ulicanad, 'nrmiesznad' => $nrmiesznad, 'kodnad' => $kodnad, 'miastood' => $miastood, 'ulicaod' => $ulicaod, 'nrmieszod' => $nrmieszod, 'kodod' => $kodod, 'nadawca' => $nadawca, 'nrpaczki' => $nrpaczki);

//header('Content-type:application/json;charset=utf-8');
echo json_encode($result,JSON_FORCE_OBJECT);

?>