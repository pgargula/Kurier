<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



  include'../php/session.php';

  include'../php/sessionden.php';

?>

<html>



    <head>

        <meta charset="utf-8">

        <title>Logowanie 4G</title>

        <link rel="stylesheet" href="../style/logowanie_style.css">

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

            <form method="POST" action="../php/logowanie.php">

            <h2>Login</h2>

            <form>

                <div class="inputBox">

                    <input type="text" name="login" required="">

                    <label>Login</label>

                    

                </div>

                <div class="inputBox">

                    <input type="password" name="haslo" required="">

                    <label>Hasło</label>

                </div>

                <input type="submit" name="" value="submit">

            </form>

        </div>

      </form>

       

        

        <div id="stopka" class="alert alert-light">

              <strong>Stworzone przez:</strong> GOLA GIEREK GARGULA GONET.

            </div>

    </body>

</html>