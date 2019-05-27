<?php
include("dbConnect.php");

$login="kurier_Maciej";
$email="kurier@gmail.com";

$salt = uniqid();
$passwd="kurier_Maciej";
$passwd=$passwd.$salt;
$hash=sha1($passwd);




    mysqli_query($link, "insert into UZYTKOWNICY (LOGIN, HASLO, EMAIL, SALT, TYP) values ('$login','$hash','$email','$salt',2);");
   

?>