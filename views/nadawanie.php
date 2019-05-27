<?php

include'../php/session.php';
include'../php/sessionrequire.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Nadaj przesylke 4G</title>
        <link rel="stylesheet" href="../style/nadawanie_style.css">
        <script type="text/javascript" src="../js/menu.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
   <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
 
    </head>
  
    <body>
    <?php 
            if(!isset($_SESSION["zalogowany"]))
            include('navbarNotLog.php');
            else
            include('navbarLog.php');
            ?>
        <div id="pud"  class="box">
                <h2>Nadaj przesylke</h2>
                <h3>Adres nadawcy</h3>
                <form  method="POST"  action="../php/nadawanie.php" id="form" name="form">
                    <div class="inputBox">
                        <input type="text" name="miastoNad" required="">
                        <label>Miasto</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="ulicaNad" required="">
                        <label>Ulica</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="mieszkanieNad" required="">
                        <label>Nr. mieszkania</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="kodNad" required="">
                        <label>Kod pocztowy</label>
                    </div>
                    <h3>Adres odbiorcy</h3>
                    <div class="inputBox">
                        <input type="text" name="miastoOdb" required="">
                        <label>Miasto</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="ulicaOdb" required="">
                        <label>Ulica</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="mieszkanieOdb" required="">
                        <label>Nr. mieszkania</label>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="kodOdb" required="">
                        <label>Kod pocztowy</label>
                    </div>
                    <button type="submit" class="btn btn-success" name="nadaj">Zamów</button>
                </form>
       </div>
   </body>
</html>
