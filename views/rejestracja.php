<?php

include'../php/session.php';
include'../php/sessionden.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Rejestracja 4G</title>
        <link rel="stylesheet" type="text/css" href="../style/logowanie_style.css">  
        <script type="text/javascript" src="../js/menu.js"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
 
    </head>
<html>    
    <body>
          
    <?php 
            if(!isset($_SESSION["zalogowany"]))
            include('navbarNotLog.php');
            else
            include('navbarLog.php');
            ?>
        <div class="box">
            <h2>Rejestracja</h2>
            <form method="POST" action="../php/rejestracja.php">
                    <div class="inputBox">
                            <input type="text" name="login" required="">
                            <label>Login</label>
                    </div> 
                    <div class="inputBox">
                            <input type="text" name="password" required="">
                            <label>Hasło</label>
                    </div> 
                    <div class="inputBox">
                            <input type="text" name="rpassword" required="">
                            <label>Powtórz hasło</label>
                    </div>
                    <div class="inputBox">
                            <input type="text" name="email" required="">
                            <label>Email</label>
                    </div>
               
                    <input type="submit" value="Utwórz konto" name="rejestruj">
                    </form>
        </div>
        <div id="stopka" class="alert alert-light">
                    <strong>Stworzone przez:</strong> GOLA GIEREK GARGULA GONET.
                  </div>
    </body>
</html>