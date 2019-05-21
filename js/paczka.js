var rodzaj;
var flaga1;
var flaga2;
var flaga3;
var flaga4;
var rozmiar;

function cena(){
    var waga=document.getElementById("waga").value;
    var cena2; 
    var cena3;
    var zdjecie;
  if(flaga1==1 && flaga2==1 && flaga3==1 && flaga4==1){
   rozmiar1();
   switch(rozmiar){
      case 1:
        if(waga>0 && waga<=1) {zdjecie='ups.jpg';cena3="3.99" ;}
        if(waga>1 && waga<=2) {zdjecie='poczta.jpg';cena3="4.99";}
        break;
      case 2:
        if(waga>0 && waga<=1) {zdjecie='ups.jpg';cena3="4.99" ;}
        if(waga>1 && waga<=2) {zdjecie='dhl.jpg';cena3="5.99";}
        break;
      case 3:
        if(waga>0 && waga<=1) {zdjecie='fedek.jpg';cena3="5.99";}
        if(waga>1 && waga<=2) {zdjecie='tnt.jpg';cena3="6.99";}
        break;
      case 4:
        if(waga>0 && waga<=1) {zdjecie='dpd.jpg';cena3="5.50" ;}
        if(waga>1 && waga<=2) {zdjecie='poczta.jpg';cena3="6.50" ;}
        break;
      case 5:
        if(waga>0 && waga<=1) {zdjecie='dhl.jpg';cena3="6.50";}
        if(waga>1 && waga<=2) {zdjecie='fedek.jpg';cena3="7.50" ;}
        break;
      case 6:
        if(waga>0 && waga<=1) {zdjecie='ups.jpg';cena3="8.99";}
        if(waga>1 && waga<=2) {zdjecie='dpd.jpg';cena3="9.99";}
        break;
      case 7:
        if(waga>0 && waga<=100) {zdjecie='ups.jpg';cena3="130";}
        if(waga>100 && waga<=500) {zdjecie='poczta.jpg';cena3="149";}
        if(waga>500 && waga<=1000) {zdjecie='tnt.jpg';cena3="170" ;}
        break;
      case 8:
        if(waga>0 && waga<=100) {zdjecie='dhl.jpg';cena3="150" ;}
        if(waga>100 && waga<=500) {zdjecie='ups.jpg';cena3="169" ;}
        if(waga>500 && waga<=1000) {zdjecie='poczta.jpg';cena3="180";}
        break;
      case 9:
        if(waga>0 && waga<=100) {zdjecie='ups.jpg';cena3="170";}
        if(waga>100 && waga<=500) {zdjecie='poczta.jpg';cena3="190";}//cos z tego nie dodaje do bazy
        if(waga>500 && waga<=1000) {zdjecie='tnt.jpg';cena3="220";}
        break;
      case 10:
        if(waga>0 && waga<=10) {zdjecie='dpd.jpg';cena3="12.99" ;}
        if(waga>10 && waga<=20) {zdjecie='ups.jpg';cena3="15.99 ";}
        if(waga>20 && waga<=50) {zdjecie='fedek.jpg';cena3="19.99" ;}
        if(waga>50 && waga<=75) {zdjecie='dpd.jpg';cena3="24.99";}
        break;
      case 11:
        if(waga>0 && waga<=10) {zdjecie='dpd.jpg';cena3="13.99";}
        if(waga>10 && waga<=20) {zdjecie='ups.jpg';cena3="16.99" ;}
        if(waga>20 && waga<=50) {zdjecie='fedek.jpg';cena3="22.99" ;}
        if(waga>50 && waga<=75) {zdjecie='dpd.jpg';cena3="26.99" ;}
        break;
      case 12:
        if(waga>0 && waga<=10) {zdjecie='dpd.jpg';cena3="15.99" ;}
        if(waga>10 && waga<=20) {zdjecie='ups.jpg';cena3="16.99" ;}
        if(waga>20 && waga<=50) {zdjecie='fedek.jpg';cena3="24.99" ;}
        if(waga>50 && waga<=75) {zdjecie='dpd.jpg';cena3="29.99";}
        break;
      case 13:
        if(waga>0 && waga<=10) {zdjecie='dpd.jpg';cena3="14.99";}
        if(waga>10 && waga<=20) {zdjecie='ups.jpg';cena3="19.99" ;}
        if(waga>20 && waga<=50) {zdjecie='fedek.jpg';cena3=" 21.99" ;}
        if(waga>50 && waga<=75) {zdjecie='dpd.jpg';cena3="28.99";}
        break;
      case 14:
        if(waga>0 && waga<=10) {zdjecie='dpd.jpg';cena3="20.99";}
        if(waga>10 && waga<=20) {zdjecie='ups.jpg';cena3="24.99";}
        if(waga>20 && waga<=50) {zdjecie='fedek.jpg';cena3="29.99" ;}
        if(waga>50 && waga<=75) {zdjecie='dpd.jpg';cena3="35.99";}
        break;
      case 15:
        if(waga>0 && waga<=10) {zdjecie='dpd.jpg';cena3="22.99";}
        if(waga>10 && waga<=20) {zdjecie='ups.jpg';cena3="29.99" ;}
        if(waga>20 && waga<=50) {zdjecie='fedek.jpg';cena3="39.99" ;}
        if(waga>50 && waga<=75) {zdjecie='dpd.jpg';cena3="44.99";}
        break;
    }
  var cena1='<h6>.</h6><a href="#"><span></span></a><div><h2>Najtansza oferta</h2></div><div class="row"><div class="col-md-4"><img class="rounded" src="../images/'+zdjecie+'" height="150" width="150"></div><div class="col-md-8"><h3>cena='+cena3+'zl</h3></div></div>';
  var napis=cena1;
    document.getElementById("cena").innerHTML=(napis);
    document.getElementById("cena3").innerHTML=(cena3);
    document.form.cena3.value =cena3;
  }
  else{
    document.getElementById("cena").innerHTML=("");
    document.form.cena3.value =cena3;
  }
  
 

} 

