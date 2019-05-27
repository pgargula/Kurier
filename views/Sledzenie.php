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
            include('navbarLog.php');
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
                {   include("../php/dbConnect.php");
                    
                    $query=mysqli_query($link,"SELECT ID_TRANSAKCJE, STAN FROM TRANSAKCJE WHERE NR_PACZKI='$_POST[nrprzesylki]';");
                        while ($tabnad= mysqli_fetch_assoc($query)){
                       $_SESSION['id_transakcji']=$tabnad['ID_TRANSAKCJE'];
                        echo" <h2>Status</h2>";
                        if($tabnad['STAN']==1)
                            {echo "<div class=\"alert alert-info\" role=\"alert\">W oczekiwaniu</div>";}
                        if($tabnad['STAN']==2)
                            {echo "<div class=\"alert alert-info\" role=\"alert\">Odebrana przez kuriera</div>";}
                        if($tabnad['STAN']==3)
                            {echo "<div class=\"alert alert-warning\" role=\"alert\">W drodze</div>";}
                        if($tabnad['STAN']==4)
                            {echo "<div class=\"alert alert-success\" role=\"alert\">Dostarczona</div>";}
                            }
                include('szczegoly.php');
                }
                ?>
                </div>
