function spS(){
  var MaxL=30;//max szerokosc dla listu
  var MaxP=90;//max szerokosc dla paczki
  var MaxPl=120;//max szerokosc dla palety
  var szerokosc=document.getElementById("szerokosc").value;
  var dlugosc=document.getElementById("dlugosc").value;
  var w_l=document.getElementById("szerokosc").value.length;
switch (rodzaj) 
{
  case '1':
   if(w_l<1)//sprawdzenie czy cos jest wpisane
  { 
    document.getElementById("szer").innerHTML=("");
    document.getElementById("szerokosc").style.borderBottom="1px solid ";
    document.getElementById("szerokosc").style.borderColor=" #fff";
    flaga3=0;
  }
  else{
    if(szerokosc<=0)//sprawdzenie czy wartosc jest dodatnia
    {
      document.getElementById("szer").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("szerokosc").style.borderBottom="solid 2px";
      document.getElementById("szerokosc").style.borderColor="red";
      flaga3=0;
    }
    else{
      if(szerokosc>MaxL)//sprawdzenie czy jest mniejsza niż maksymalna dozwolona
        {
        document.getElementById("szer").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxL+"</h5>");
        document.getElementById("szerokosc").style.borderBottom="solid 2px";
        document.getElementById("szerokosc").style.borderColor="red";
        flaga3=0;
        }
      else{
        if(szerokosc>dlugosc)//sprawdzenie czy szerokosc jest mniejsza niż dlugosc
          {
          document.getElementById("szer").innerHTML=("<h5>Szerokść musi byc mniejsza niż dlugość</h5>");
          document.getElementById("szerokosc").style.borderBottom="solid 2px";
          document.getElementById("szerokosc").style.borderColor="red";
          flaga3=0;
          }
        else
          {
          document.getElementById("szer").innerHTML=("");
          document.getElementById("szerokosc").style.borderBottom="1px solid ";
          document.getElementById("szerokosc").style.borderColor=" #fff";
          flaga3=1;  
        }
      }
    }
  }
  break;
  case '2':
  if(w_l<1)
  { 
    document.getElementById("szer").innerHTML=("");
    document.getElementById("szerokosc").style.borderBottom="1px solid ";
    document.getElementById("szerokosc").style.borderColor=" #fff";
     flaga3=0;
  }
  else{
    if(szerokosc<=0)
    {
      document.getElementById("szer").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("szerokosc").style.borderBottom="solid 2px";
      document.getElementById("szerokosc").style.borderColor="red";
      flaga3=0;
    }
    else{
      if(szerokosc>MaxP)
        {
        document.getElementById("szer").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxP+"</h5>");
        document.getElementById("szerokosc").style.borderBottom="solid 2px";
        document.getElementById("szerokosc").style.borderColor="red";
        flaga3=0;
      }
      else{
        if(szerokosc>dlugosc)//sprawdzenie czy szerokosc jest mniejsza niż dlugosc
          {
          document.getElementById("szer").innerHTML=("<h5>Szerokść musi byc mniejsza niż dlugość</h5>");
          document.getElementById("szerokosc").style.borderBottom="solid 2px";
          document.getElementById("szerokosc").style.borderColor="red";
          flaga3=0;
          }
        else
          {
          document.getElementById("szer").innerHTML=("");
          document.getElementById("szerokosc").style.borderBottom="1px solid ";
          document.getElementById("szerokosc").style.borderColor=" #fff";
          flaga3=1;  
        }
      }
    }
  }
  break;
  case '3':
  if(w_l<1)
  { 
    document.getElementById("szer").innerHTML=("");
    document.getElementById("szerokosc").style.borderBottom="1px solid ";
    document.getElementById("szerokosc").style.borderColor=" #fff";
    flaga3=0;
  }
  else{
    if(szerokosc<=0)
    {
      document.getElementById("szer").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("szerokosc").style.borderBottom="solid 2px";
      document.getElementById("szerokosc").style.borderColor="red";
      flaga3=0;
    }
    else{
      if(szerokosc>MaxPl)
        {
        document.getElementById("szer").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxPl+"</h5>");
        document.getElementById("szerokosc").style.borderBottom="solid 2px";
        document.getElementById("szerokosc").style.borderColor="red";
        flaga3=0;
      }
      else{
        if(szerokosc>dlugosc)//sprawdzenie czy szerokosc jest mniejsza niż dlugosc
          {
          document.getElementById("szer").innerHTML=("<h5>Szerokść musi byc mniejsza niż dlugość</h5>");
          document.getElementById("szerokosc").style.borderBottom="solid 2px";
          document.getElementById("szerokosc").style.borderColor="red";
          flaga3=0;
          }
        else
          {
          document.getElementById("szer").innerHTML=("");
          document.getElementById("szerokosc").style.borderBottom="1px solid ";
          document.getElementById("szerokosc").style.borderColor=" #fff";
          flaga3=1;  
        }
      }
    }
  }
  break;
}cena();
}
