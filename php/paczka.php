<?php 
include('../php/session.php');
include'../php/sessionrequire.php';
include("dbConnect.php");

$_POST['wysokosc'] = mysqli_real_escape_string($link,$_POST['wysokosc']);
$_POST['szerokosc'] = mysqli_real_escape_string($link,$_POST['szerokosc']);
$_POST['dlugosc'] = mysqli_real_escape_string($link,$_POST['dlugosc']);
$_POST['waga'] = mysqli_real_escape_string($link,$_POST['waga']);
$_POST['cena3'] = mysqli_real_escape_string($link,$_POST['cena3']);


if($_POST['w1']==1)
$typ="list";
if($_POST['w1']==2)
$typ="paczka";
if($_POST['w1']==3)
$typ="paleta";
mysqli_query($link, "insert into PRZESYLKA (WYSOKOSC, DLUGOSC, SZEROKOSC, CENA, TYP, WAGA) values ('$_POST[wysokosc]','$_POST[dlugosc]','$_POST[szerokosc]','$_POST[cena3]','$typ','$_POST[waga]');");
$tmp = mysqli_insert_id($link);

$_SESSION['ID_PACZ']= $tmp;




header("Location: ../views/nadawanie.php");

?>