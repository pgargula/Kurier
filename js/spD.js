function spD(){
  var MaxL=40;//max dlugosc dla listu
  var MaxP=90;//max dlugosc dla paczki
  var MaxPl=120;//max dlugosc dla palety
  var dlugosc=document.getElementById("dlugosc").value;
  var w_l=document.getElementById("dlugosc").value.length;
    switch (rodzaj){
        case '1':
            if(w_l<1)//sprawdzenie czy cos jest wpisane
            { 
                document.getElementById("dlug").innerHTML=("");
                document.getElementById("dlugosc").style.borderBottom="1px solid ";
                document.getElementById("dlugosc").style.borderColor=" #fff";
                flaga2=0;
            }
            else{
                if(dlugosc<=0)//sprawdzenie czy wartosc jest dodatnia
                {
                    document.getElementById("dlug").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
                    document.getElementById("dlugosc").style.borderBottom="solid 2px";
                    document.getElementById("dlugosc").style.borderColor="red";
                    flaga2=0;
                }
                else{
                    if(dlugosc>MaxL)//sprawdzenie czy jest mniejsza niż maksymalna dozwolona
                    {
                        document.getElementById("dlug").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxL+"</h5>");
                        document.getElementById("dlugosc").style.borderBottom="solid 2px";
                        document.getElementById("dlugosc").style.borderColor="red";
                        flaga2=0;
                    }
                    else{
                        document.getElementById("dlug").innerHTML=("");
                        document.getElementById("dlugosc").style.borderBottom="1px solid ";
                        document.getElementById("dlugosc").style.borderColor=" #fff";
                        flaga2=1;
                    }
  
                }
           }
           break;
       case '2':
           if(w_l<1)
           { 
                document.getElementById("dlug").innerHTML=("");
                document.getElementById("dlugosc").style.borderBottom="1px solid ";
                document.getElementById("dlugosc").style.borderColor=" #fff";
                flaga2=0;
           }
           else{
                if(dlugosc<=0)
                {
                    document.getElementById("dlug").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
                    document.getElementById("dlugosc").style.borderBottom="solid 2px";
                    document.getElementById("dlugosc").style.borderColor="red";
                    flaga2=0;
                }
                else{
                    if(dlugosc>MaxP)
                    {
                        document.getElementById("dlug").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxP+"</h5>");
                        document.getElementById("dlugosc").style.borderBottom="solid 2px";
                        document.getElementById("dlugosc").style.borderColor="red";
                        flaga2=0;
                    }
                    else{
                        document.getElementById("dlug").innerHTML=("");
                        document.getElementById("dlugosc").style.borderBottom="1px solid ";
                        document.getElementById("dlugosc").style.borderColor=" #fff";
                        flaga2=1;
                    }
               }
          }
          break;
      case '3':
          if(w_l<1)
          { 
                document.getElementById("dlug").innerHTML=("");
                document.getElementById("dlugosc").style.borderBottom="1px solid ";
                document.getElementById("dlugosc").style.borderColor=" #fff";
                flaga2=0;
          }
          else{
              if(dlugosc<=0)
              {
                    document.getElementById("dlug").innerHTML=("<h5>Podana wartość musi być wieksza od zera</h5>");
                    document.getElementById("dlugosc").style.borderBottom="solid 2px";
                    document.getElementById("dlugosc").style.borderColor="red";
                    flaga2=0;
              }
              else{
                    if(dlugosc>MaxPl)
                    {
                        document.getElementById("dlug").innerHTML=("<h5>Podana wartość musi być mniejsza od "+MaxPl+"</h5>");
                        document.getElementById("dlugosc").style.borderBottom="solid 2px";
                        document.getElementById("dlugosc").style.borderColor="red";
                        flaga2=0;
                    }
                    else{
                        document.getElementById("dlug").innerHTML=("");
                        document.getElementById("dlugosc").style.borderBottom="1px solid ";
                        document.getElementById("dlugosc").style.borderColor=" #fff";
                        flaga2=1;
                    }
              }
        }
        break;
    }
    spS();
    cena();
}
