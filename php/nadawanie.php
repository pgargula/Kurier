<?php
include('../php/session.php');
include'../php/sessionrequire.php';
include'dbConnect.php';

$_POST['miastoNad'] = mysqli_real_escape_string($link,$_POST['miastoNad']);
$_POST['ulicaNad'] = mysqli_real_escape_string($link,$_POST['ulicaNad']);
$_POST['mieszkanieNad'] = mysqli_real_escape_string($link,$_POST['mieszkanieNad']);
$_POST['kodNad'] = mysqli_real_escape_string($link,$_POST['kodNad']);

$_POST['miastoOdb'] = mysqli_real_escape_string($link,$_POST['miastoOdb']);
$_POST['ulicaOdb'] = mysqli_real_escape_string($link,$_POST['ulicaOdb']);
$_POST['mieszkanieOdb'] = mysqli_real_escape_string($link,$_POST['mieszkanieOdb']);
$_POST['kodOdb'] = mysqli_real_escape_string($link,$_POST['kodOdb']);

mysqli_query($link,"insert into Adres (MIASTO, ULICA, NR_MIESZ, KOD_POCZTOWY) values ('$_POST[miastoNad]','$_POST[ulicaNad]','$_POST[mieszkanieNad]','$_POST[kodNad]');");
$id_nad= mysqli_insert_id($link);

mysqli_query($link,"insert into Adres (MIASTO, ULICA, NR_MIESZ, KOD_POCZTOWY) values ('$_POST[miastoOdb]','$_POST[ulicaOdb]','$_POST[mieszkanieOdb]','$_POST[kodOdb]');");
$id_odb= mysqli_insert_id($link);

$id_paczka=$_SESSION["ID_PACZ"];
$id=$_SESSION["ID"];
$nrpaczki = uniqid();
$nrpaczki=$nrpaczki.$id_paczka;
$stan=1;

mysqli_query($link, "insert into TRANSAKCJE (ID_UZYTKOWNIK, ID_ADRES_NAD, ID_ADRES_ODB, ID_PRZESYLKA, STAN, NR_PACZKI) values ('$id','$id_nad','$id_odb','$id_paczka','$stan','$nrpaczki');");
header("Location: ../views/Startowa.php");
?>