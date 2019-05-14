function spRW()//sprawdzanie rodzaju wysylki
{
  if(document.getElementById("c1").checked){
  rodzaj = document.getElementById("c1").value;
  document.getElementById("d1").style.border="2px solid ";
  document.getElementById("d1").style.borderColor=" #fff";}
  else{
    document.getElementById("d1").style.border="0px solid ";
    document.getElementById("d1").style.borderColor=" #fff";
  }
if(document.getElementById("c2").checked){
  rodzaj = document.getElementById("c2").value;
  document.getElementById("d2").style.border="2px solid ";
  document.getElementById("d2").style.borderColor=" #fff";}
  else{
    document.getElementById("d2").style.border="0px solid ";
    document.getElementById("d2").style.borderColor=" #fff";
  }
if(document.getElementById("c3").checked){
  rodzaj = document.getElementById("c3").value;
  document.getElementById("d3").style.border="2px solid ";
  document.getElementById("d3").style.borderColor=" #fff";}
  else{
    document.getElementById("d3").style.border="0px solid ";
    document.getElementById("d3").style.borderColor=" #fff";
  }
  spD();
  spS();
  spW();
  spWa();
  cena();
}
