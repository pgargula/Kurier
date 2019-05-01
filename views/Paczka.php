<?php 
include'../session.php';
?>

<html lang="pl" dir="ltr"  action="../session.php">

  <head>
    <meta charset="utf-8">
    <title>KURIER4G</title>
    <script type="text/javascript" href="paczka.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/paczka_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
  </head>
    <body onload="witaj()">
   
      <div class="header">
        <h2 class="logo"> KURIER4G</h2>
          <input type="checkbox" id="chk">
          <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
          </label>
          <ul class="menu">
            <a href="Startowa.html">Home</a>
            <a href="Paczka.php">PACZKA</a>
            <a href="#">ŚLEDZENIE</a>
            <a href="#">KURIER</a>
            <a href="#">NADAJ PACZKĘ</a>
            <a href="logowanie.html">ZALOGUJ</a>
            <a href="rejestracja.html">ZAREJSTRUJ</a>
            <a href="../logout.php">Wyloguj</a>
            <label for="chk" class="hide-menu-btn">
              <i class="fas fa-times"></i>
            </label>
          </ul>
        </div>
<div class="box">
    
  <div>
    <h2>Wybierz rodzaj przesyłki</h2>
</div>
<a href="#"><span></span></a>
<h6>.</h6>

<div class="row">
 
  <div class="col-4 div1 rounded">
      <label>
        <input type="radio" name="w1" id="c1" value="1">
        <img class="rounded" src="../images/list.jpg"  height="150" width="150">
      </label>
    </div>

    <div class="col-4 div2 rounded">
      <label>
        <input type="radio" name="w1" id="c2" value="2">
        <img  class="rounded" src="../images/paczka.jpg" height="150" width="150">
      </label>
    </div>

    <div class="col-4 div3 rounded">
      <label>
        <input type="radio" name="w1" id="c3" value="3">
        <img class="rounded" src="../images/paleta.jpg" height="150" width="150">
      </label>
    </div>

  </div>

<h6>.</h6>
<a href="#"><span></span></a>

<div>
    <h2>Podaj wymiary przesyłki</h2>
</div>
<div class="inputBox">
  <input type="number" id="wysokosc" name="" required=""/>
  <label>Wysokość</label>
</div>
  <div id="wys"></div>

<div class="inputBox">
  <input type="number" id="szerokosc"  name="" required=""/>
  <label>Długość</label>
</div>
<div id="szer"></div>


<div class="inputBox">
  <input type="number" id="dlugosc" name="" required=""/>
  <label>Szerokość</label>
</div>
<div id="dlug"></div>   



<div>
  <input type="submit" value="sp" onclick="sp()"></input>
</div>



     
  
<div id="cena"></div>   

</div>
 

 <div id="stopka" class="alert alert-light">
        <strong>Stworzone przez:</strong> GOLA GIEREK GARGULA GONET.
      </div>
</body>

</html>