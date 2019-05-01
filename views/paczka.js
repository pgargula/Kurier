function sp()
{
    var odpowiedz;
    var w=document.getElementById("wysokosc").value;
    var s=document.getElementById("szerokosc").value;
    var d=document.getElementById("dlugosc").value;

    //sprawdznie ktora forma wysylki
    if(document.getElementById("c1").checked)
        odpowiedz = document.getElementById("c1").value;
    if(document.getElementById("c2").checked)
        odpowiedz = document.getElementById("c2").value;
    if(document.getElementById("c3").checked)
        odpowiedz = document.getElementById("c3").value;






 //obslugalistow     
if(odpowiedz==1){
  

  //sprawdznie wysokosci
  if(w>0 && w<20)
  {
    //sprawdzenie dlugosci
    if(d>0 && d<20)
    {
      //sprawdzenie szerokosci
      if(s>0 && s<3)
      {
        //dalsza obsluga listow
        document.getElementById("cena").innerHTML=("najleppsza cena: DHL-25zl");
      
      }
      else{
        document.getElementById("wys").innerHTML=("podanawarość musi byc z przedziału od 0-3");
      }
    }
    else{
      document.getElementById("dlug").innerHTML=("podanawarość musi byc z przedziału od 0-20");    
    }
  }
  else{
    document.getElementById("szer").innerHTML=("podanawarość musi byc z przedziału od 0-20");    
  }



}
else{
  if(odpowiedz==2){
    //obsluga paczek
    //sprawdznie wysokosci
  if(w>0 && w<50)
  {
    //sprawdzenie dlugosci
    if(d>0 && d<50)
    {
      //sprawdzenie szerokosci
      if(s>0 && s<20)
      {
        //dalsza obsluga paczek
        document.getElementById("cena").innerHTML=("najleppsza cena: DPD-125zl");
      
      }
      else{
        document.getElementById("wys").innerHTML=("podanawarość musi byc z przedziału od 0-20");
      }
    }
    else{
      document.getElementById("dlug").innerHTML=("podanawarość musi byc z przedziału od 0-50");    
    }
  }
  else{
    document.getElementById("szer").innerHTML=("podanawarość musi byc z przedziału od 0-50");    
  }

  }
  else{
    if(odpowiedz==3){
    //obsluga palet
    //sprawdznie wysokosci
  if(w>0 && w<150)
  {
    //sprawdzenie dlugosci
    if(d>0 && d<120)
    {
      //sprawdzenie szerokosci
      if(s>0 && s<75)
      {
        //dalsza obsluga listow
        document.getElementById("cena").innerHTML=("najleppsza cena: PocztaPolska-225zl");
      }
      else{
        document.getElementById("wys").innerHTML=("podanawarość musi byc z przedziału od 0-75");
      }
    }
    else{
      document.getElementById("dlug").innerHTML=("podanawarość musi byc z przedziału od 0-120");    
    }
  }
  else{
    document.getElementById("szer").innerHTML=("podanawarość musi byc z przedziału od 0-150");    
  }

    }
    else{
    //gdy nic nie wybrane
    }
  }
}

}
