<?php

include'../php/session.php';
?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KURIER4G</title>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/paczka.js"></script>
    <script type="text/javascript" src="../js/spD.js"></script>
    <script type="text/javascript" src="../js/spS.js"></script>
    <script type="text/javascript" src="../js/spW.js"></script>
    <script type="text/javascript" src="../js/spWa.js"></script>
    <script type="text/javascript" src="../js/sw.js"></script>
    <script type="text/javascript" src="../js/rozmiar.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/paczka_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body onload="spRW()">
<?php 
            if(!isset($_SESSION["zalogowany"]))
            include('navbarNotLog.html');
            else
            include('navbarLog.html');
            ?>
    <div id="pud" class="box">
        <div>
            <h2>Wybierz rodzaj przesyłki</h2>
        </div>
        <a href="#"><span></span></a>
        <h6>.</h6>
        <div class="row" onchange="spRW()";>
            <div class="col div1 rounded" id="d1">
                <label>
                    <input type="radio" name="w1" id="c1" value="1" checked>
                    <img class="rounded" src="../views/list.jpg"  height="150" width="150">
                </label>
            </div>
            <div class="col div2 rounded" id="d2">
                <label>
                    <input type="radio" name="w1" id="c2" value="2">
                    <img  class="rounded" src="../views/paczka.jpg" height="150" width="150">
                </label>
            </div>
            <div class="col div3 rounded" id="d3">
                <label>
                    <input type="radio" name="w1" id="c3" value="3">
                    <img class="rounded" src="../views/" height="150" width="150">
                </label>
            </div>
        </div>
        <h6>.</h6>
        <a href="#"><span></span></a>
        <div>
            <h2>Podaj wymiary przesyłki</h2>
        </div>
        <div class="inputBox" oninput="spW()">
            <input type="number"  id="wysokosc" name="" required=""/>
            <label>Wysokość</label>
        </div>
            <div id="wys"></div>
        <div class="inputBox" oninput="spD()">
            <input type="number"  id="dlugosc"  name="" required=""/>
            <label>Długość</label>
        </div>
            <div id="dlug"></div>
        <div class="inputBox" oninput="spS()">
            <input type="number"  id="szerokosc" name="" required=""/>
            <label>Szerokość</label>
        </div>
            <div id="szer"></div>  
        <div class="inputBox oninput="spWa()">
            <input type="number"  id="waga"  name="" required=""/>
            <label>Waga</label>
        </div>
            <div  id="wag"></div>
        <div id="cena"></div>   
    </div>
</body>
</html>
