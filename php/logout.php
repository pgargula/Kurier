<?php
include'session.php';
echo "wylogowano!!";
session_unset(); 
session_destroy(); 
header("Location: ../views/logowanie.php");
?>