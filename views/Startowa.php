<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include'../php/session.php';

?>

<html lang="pl" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>KURIER4G</title>

    <link rel="stylesheet" type="text/css" href="../style/startowa_style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

  </head>

<body>

<?php 

            if(!isset($_SESSION["zalogowany"]))

            include('navbarNotLog.php');

            else

            {

                if($_SESSION["typ"]==2)

                    include('navbarKur.php');

                else

                    include('navbarLog.php');

            }

            ?>

  <section></section>

  <script  src="http://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="></script>

  <script type="text/javascript">

  $(window).scroll(function(){

      var scroll_position=$(window).scrollTop()/2;

      $('section').css({

          'background-position-x':-scroll_position+'px',

      })

  })

  </script>

  <div id="stopka" class="alert alert-light">

    <strong>Stworzone przez:</strong> GOLA GIEREK GARGULA GONET.

  </div>

</body>

</html>

