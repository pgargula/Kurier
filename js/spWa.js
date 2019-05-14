function spWa(){
  var MaxL=2;//max waga dla listu
  var MaxP=75;//max waga dla paczki
  var MaxPl=1000;//max waga dla palety
  var waga=document.getElementById("waga").value;
  var w_l=document.getElementById("waga").value.length;
switch (rodzaj) 
{
  case '1':
   if(w_l<1)//sprawdzenie czy cos jest wpisane
  { 
    document.getElementById("wag").innerHTML=("");
    document.getElementById("waga").style.borderBottom="1px solid ";
    document.getElementById("waga").style.borderColor=" #fff";
    flaga4=0;
  }
  else{
    if(waga<=0)//sprawdzenie czy wartosc jest dodatnia
    {
      document.getElementById("wag").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("waga").style.borderBottom="solid 2px";
      document.getElementById("waga").style.borderColor="red";
      flaga4=0;
    }
    else{
      if(waga>MaxL)//sprawdzenie czy jest mniejsza niż maksymalna dozwolona
        {
        document.getElementById("wag").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxL+"</h5>");
        document.getElementById("waga").style.borderBottom="solid 2px";
        document.getElementById("waga").style.borderColor="red";
        flaga4=0;
        }
      else
        {
        document.getElementById("wag").innerHTML=("");
        document.getElementById("waga").style.borderBottom="1px solid ";
    document.getElementById("waga").style.borderColor=" #fff";
        flaga4=1;
        }
  
    }
  }
  break;
  case '2':
  if(w_l<1)
  { 
    document.getElementById("wag").innerHTML=("");
    document.getElementById("waga").style.borderBottom="1px solid ";
    document.getElementById("waga").style.borderColor=" #fff";
    flaga4=0;
  }
  else{
    if(waga<=0)
    {
      document.getElementById("wag").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("waga").style.borderBottom="solid 2px";
      document.getElementById("waga").style.borderColor="red";
      flaga4=0;
    }
    else{
      if(waga>MaxP)
        {
        document.getElementById("wag").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxP+"</h5>");
        document.getElementById("waga").style.borderBottom="solid 2px";
      document.getElementById("waga").style.borderColor="red";
      flaga4=0;
        }
      else
        {
        document.getElementById("wag").innerHTML=("");
        document.getElementById("waga").style.borderBottom="1px solid ";
    document.getElementById("waga").style.borderColor=" #fff";
    flaga4=1;
        }
  
    }
  }
  break;
  case '3':
  if(w_l<1)
  { 
    document.getElementById("wag").innerHTML=("");
    document.getElementById("waga").style.borderBottom="1px solid ";
    document.getElementById("waga").style.borderColor=" #fff";
     flaga4=0;
  }
  else{
    if(waga<=0)
    {
      document.getElementById("wag").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
      document.getElementById("waga").style.borderBottom="solid 2px";
      document.getElementById("waga").style.borderColor="red";
      flaga4=0;
    }
    else{
      if(waga>MaxPl)
        {
        document.getElementById("wag").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxPl+"</h5>");
        document.getElementById("waga").style.borderBottom="solid 2px";
      document.getElementById("waga").style.borderColor="red";
      flaga4=0;
        
        }
      else
        {
        document.getElementById("wag").innerHTML=("");
        document.getElementById("waga").style.borderBottom="1px solid ";
        document.getElementById("waga").style.borderColor=" #fff";
         flaga4=1;
        }
  
    }
  }
  break;
}cena();
}
