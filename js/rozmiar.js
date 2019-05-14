function rozmiar1(){
  var wysokosc=document.getElementById("wysokosc").value;
  var szerokosc=document.getElementById("szerokosc").value;
  var dlugosc=document.getElementById("dlugosc").value;
  switch (rodzaj) 
    {
    case '1':
        if(dlugosc>0 && dlugosc<=10 && szerokosc>0 && szerokosc <=10) {rozmiar=1;}
        if(dlugosc>10 && dlugosc<=20 && szerokosc>0 && szerokosc <=10) {rozmiar=2;}
        if(dlugosc>20 && dlugosc<=40 && szerokosc>0 && szerokosc <=10) {rozmiar=3;}
        if(dlugosc>10 && dlugosc<=20 && szerokosc>10 && szerokosc <=20) {rozmiar=4;}
        if(dlugosc>20 && dlugosc<=40 && szerokosc>10 && szerokosc <=20) {rozmiar=5;}
        if(dlugosc>20 && dlugosc<=40 && szerokosc>20 && szerokosc <=30) {rozmiar=6;}
        break;
    case '2':
        if(dlugosc>0 && dlugosc<=10 && szerokosc>0 && szerokosc <=10) {rozmiar=10;}
        if(dlugosc>10 && dlugosc<=40 && szerokosc>0 && szerokosc <=10) {rozmiar=11;}
        if(dlugosc>40 && dlugosc<=90 && szerokosc>0 && szerokosc <=10) {rozmiar=12;}
        if(dlugosc>10 && dlugosc<=40 && szerokosc>10 && szerokosc <=40) {rozmiar=13;}
        if(dlugosc>40 && dlugosc<=90 && szerokosc>10 && szerokosc <=40) {rozmiar=14;}
        if(dlugosc>40 && dlugosc<=90 && szerokosc>40 && szerokosc <=90) {rozmiar=15;}
        break;
    case '3':
        if(wysokosc>0 && wysokosc<=30) {rozmiar=7;}
        if(wysokosc>30 && wysokosc<=50) {rozmiar=8;}
        if(wysokosc>50 && wysokosc<=70) {rozmiar=9;}
        break;
    } 
}
