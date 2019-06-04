<?php
  
  include'dbconnect.php';
  include('../php/session.php');

if (isset($_POST['rejestruj'])){
    $_POST['email'] = mysqli_real_escape_string($link, $_POST['email']);
    $_POST['password'] = mysqli_real_escape_string($link, $_POST['password']);
    $_POST['login'] = mysqli_real_escape_string($link, $_POST['login']);
    $_POST['rpassword'] = mysqli_real_escape_string($link, $_POST['rpassword']);

$salt = uniqid();

$_POST['password']=$_POST['password'].$salt;
$hash=sha1($_POST['password']);


$hash;

    mysqli_query($link, "insert into UZYTKOWNICY (LOGIN, HASLO, EMAIL, SALT, TYP) values ('$_POST[login]','$hash','$_POST[email]','$salt',1);");
    header('Location: ../views/logowanie.php');
}
    
    
?>

