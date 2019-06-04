<?php 
include('../php/session.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include'../php/session.php';
include'dbConnect.php';



 $_POST['login'] = mysqli_real_escape_string($link,$_POST['login']);

 $_POST['haslo'] = mysqli_real_escape_string($link,$_POST['haslo']);



 

   // sprawdzamy czy login i hasło są dobre

   $result=mysqli_query($link,"SELECT ID_UZYTKOWNIK, LOGIN, HASLO, EMAIL, SALT, TYP FROM UZYTKOWNICY WHERE LOGIN = '$_POST[login]';");

   echo mysqli_num_rows($result);

  

  

  

  

  

   if (mysqli_num_rows($result) > 0)

   {

      $tabU = mysqli_fetch_assoc($result);

     

      

      $_POST['haslo']= $_POST['haslo'].$tabU['SALT'];

      $hash=sha1( $_POST['haslo']);

      

      

      if($hash==$tabU['HASLO'])

      {

         if ($tabU['TYP']==1){

         

        

         

      $_SESSION['zalogowany'] = true;

      $_SESSION['login'] = $_POST['login'];

      $_SESSION['ID']=htmlspecialchars($tabU['ID_UZYTKOWNIK']);

      $_SESSION['typ']=$tabU['TYP'];

      

      header('Location: ../views/Startowa.php');

         }


         if ($tabU['TYP']==2){

         

        

        

      $_SESSION['zalogowany'] = true;

      $_SESSION['login'] = $_POST['login'];

      $_SESSION['ID']=htmlspecialchars($tabU['ID_UZYTKOWNIK']);

      $_SESSION['typ']=$tabU['TYP'];

      

      header('Location: ../views/PanelKuriera.php');

      

      }

    

   

      }


      else echo "Wpisano złe dane.";

}

else echo "nie ma takiego użytkownika.";

   

?>

