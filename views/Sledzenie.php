<?php

include'../php/session.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sledzenie 4G</title>
        <link rel="stylesheet" href="../style/paczka_style.css">
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
            {
                if($_SESSION["typ"]==2)
                    include('navbarKur.php');
                else
                    include('navbarLog.php');
            }
            ?>
        <div   class="box">
            <h2>Sledzenie</h2>
                <form  method="post">
                    <div class="inputBox">
                        <input  name="nrprzesylki" required="">
                        <label>Numer przesylki </label>
                    </div>
                    <input type="submit" name="sprawdz" value="submit">

                
                </form>
                <?php
                
                if(isset($_POST['sprawdz']))
                { 
                    include("../php/sledzenie.php");
                    
                }
                ?>
                </div>
