function spW(){//sprawdzenie poprawnosci danych wysokosc
  var MaxL=2;//max wysokosc dla listu
  var MaxP=60;//max wysokosc dla paczki
  var MaxPl=90;//max wysokosc dla palety
  var wysokosc=document.getElementById("wysokosc").value;
  var w_l=document.getElementById("wysokosc").value.length;
switch (rodzaj) 
{
  case '1':
 
  if(w_l<1)//sprawdzenie czy cos jest wpisane
  { 
    document.getElementById("wys").innerHTML=("");
    document.getElementById("wysokosc").style.borderBottom="1px solid ";
      document.getElementById("wysokosc").style.borderColor=" #fff";
    flaga1=0;

  }
  else{
    if(wysokosc<=0)//sprawdzenie czy wartosc jest dodatnia
    {
      document.getElementById("wys").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
           document.getElementById("wysokosc").style.borderBottom="solid 2px";
        document.getElementById("wysokosc").style.borderColor="red";
      flaga1=0;
    }
    else{
      if(wysokosc>MaxL)//sprawdzenie czy jest mniejsza niż maksymalna dozwolona
        {
        document.getElementById("wys").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxL+"</h5>");
         document.getElementById("wysokosc").style.borderBottom="solid 2px";
      document.getElementById("wysokosc").style.borderColor="red";
        flaga1=0;
        }
      else
        {
        document.getElementById("wys").innerHTML=("");
        document.getElementById("wysokosc").style.borderBottom="1px solid ";
        document.getElementById("wysokosc").style.borderColor=" #fff";
        flaga1=1;
        }
  
    }
  }
  break;

  case '2':
  if(w_l<1)
  { 
    document.getElementById("wys").innerHTML=("");
    document.getElementById("wysokosc").style.borderBottom="1px solid ";
    document.getElementById("wysokosc").style.borderColor=" #fff";
  flaga1=0;
  }
  else{
    if(wysokosc<=0)
    {
      document.getElementById("wys").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("wysokosc").style.borderBottom="solid 2px";
      document.getElementById("wysokosc").style.borderColor="red";
      flaga1=0;
    }
    else{
      if(wysokosc>MaxP)
        {
        document.getElementById("wys").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxP+"</h5>");
        document.getElementById("wysokosc").style.borderBottom="solid 2px";
        document.getElementById("wysokosc").style.borderColor="red";
        flaga1=0;
        }
      else
        {
        document.getElementById("wys").innerHTML=("");
        document.getElementById("wysokosc").style.borderBottom="1px solid ";
      document.getElementById("wysokosc").style.borderColor=" #fff";
     flaga1=1;
        }
  
    }
  }
  break;
  case '3':
  if(w_l<1)
  { 
    document.getElementById("wys").innerHTML=("");
        document.getElementById("wysokosc").style.borderBottom="1px solid ";
    document.getElementById("wysokosc").style.borderColor=" #fff";
  flaga1=0;
  }
  else{
    if(wysokosc<=0)
    {
      document.getElementById("wys").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("wysokosc").style.borderBottom="solid 2px";
      document.getElementById("wysokosc").style.borderColor="red";
      flaga1=0;
    }
    else{
      if(wysokosc>MaxPl)
        {
        document.getElementById("wys").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxPl+"</h5>");
        document.getElementById("wysokosc").style.borderBottom="solid 2px";
        document.getElementById("wysokosc").style.borderColor="red";
        flaga1=0;
        }
      else
        {
        document.getElementById("wys").innerHTML=("");
        document.getElementById("wysokosc").style.borderBottom="1px solid ";
        document.getElementById("wysokosc").style.borderColor=" #fff";
      flaga1=1;
        }
  
    }
  }
  break;
}cena();
}
