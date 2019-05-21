<?php
include("dbConnect.php");

$login="kurier";
$email="kurier@gmail.com";

$salt = uniqid();
$passwd="kurier";
$passwd=$passwd.$salt;
$hash=sha1($passwd);




    mysqli_query($link, "insert into UZYTKOWNICY (LOGIN, HASLO, EMAIL, SALT, TYP) values ('$login','$hash','$email','$salt',2);");
   

?>