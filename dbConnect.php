
<?php

try {
    $link = mysqli_connect("sql7.freesqldatabase.com", "sql7290219", "xP4hvDw2Y1", "sql7290219") or die(mysqli_connect_error());
  } 
catch (Exception $e) {
  
    echo "Błąd połączenia z bazą danych";
  
  }
//$link = mysqli_connect("localhost", "1373017", "505023657", "1373017") or die(mysqli_connect_error()); 
    $link->set_charset("utf8mb4");?>