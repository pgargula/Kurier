
            <h2>Szczegóły </h2>
                <form>
                <div class="row">
                <div class="col">
                <label class="h2 mt-1"> Info:</label>
                <div class="col-md-6">  
                    <label id="cena" class="h3">Cena:</label>           
                </div>

                
                <div class="col-md-6">  
                    <label id="typ" class="h3">Typ:</label>           
                </div>
                
                <div class="col-md-6">  
                    <label id="nrpaczki" class="h3">nrpaczki:</label>           
                </div>
                <div class="col-md-6">  
                    <label id="nadawca" class="h3">nadawca:</label>           
                </div>
                
                </div>

                <div class="col">
                <label class="h2 mt-1"> Wymiary:</label>
                <div class="col-md-6">  
                    <label id="waga" class="h3">Waga:</label>           
                </div>
                
                
                <div class="col-md-6">  
                    <label id="wysokosc" class="h3">Wysokosc:</label>           
                </div>
                
                
                <div class="col-md-6">  
                    <label id="szerokosc" class="h3">szerokosc:</label>           
                </div>
                
                
                <div class="col-md-6">  
                    <label id="dlugosc" class="h3">dlugosc:</label>           
                </div>
                </div>
                </div>
                
                
                <div class="row">

                <div class="col">
                <label class="h2 mt-4"> Dane nadawcy:</label>
                <div class="col-md-6">  
                    <label id="miastonad" class="h3">miasto:</label>           
                </div>
                
               
                <div class="col-md-6">  
                    <label id="ulicanad" class="h3">ulica:</label>           
                </div>
                
               
                <div class="col-md-6">  
                    <label id="nrmiesznad" class="h3">mieszkanie:</label>           
                </div>
                
                
                <div class="col-md-6">  
                    <label id="kodnad" class="h3">kod pocztowy:</label>           
                </div>
                </div>
                
                
                <div class="col">

                <label class="h2 mt-4"> Dane odbiorcy:</label>
                <div class="col-md-6">  
                    <label id="miastood" class="h3">miasto:</label>           
                </div>
                
                
                <div class="col-md-6">  
                    <label id="ulicaod" class="h3">ulica:</label>           
                </div>
                
                
                <div class="col-md-6">  
                    <label id="nrmieszod" class="h3">mieszkanie:</label>           
                </div>
                
                
                <div class="col-md-6">  
                    <label id="kodod" class="h3">kod pocztowy:</label>           
                </div>
                
                
               
                </div>
               
                
                </div>
                </form>

<script>
 
 $(document).ready(function(){
    
    var userdb = { "cena" :'', "typ" :'', "waga" :'', "wysokosc" :'', "szerokosc" :'', "dlugosc" :'', "miastonad" :'', "ulicanad" :'', "nrmiesznad" :'', "kodnad" :'', "miastood" :'', "ulicaod" :'', "nrmieszod" :'', "kodod" :'', "nadawca" :'', "nrpaczki" :''};
  
$.ajax({   
  type: 'POST',
  //dataType: "json",
  url:'../php/szczegoly.php',
  data:  userdb,
  success: function(data)
  {
   
    
      
      //data=JSON.parse(data);
       data= jQuery.parseJSON(data);    
       document.getElementById("cena").innerHTML+=data[0].cena;
       document.getElementById("typ").innerHTML+=data[0].typ;
       document.getElementById("waga").innerHTML+=data[0].waga;
       document.getElementById("wysokosc").innerHTML+=data[0].wysokosc;
       document.getElementById("szerokosc").innerHTML+=data[0].szerokosc;
       document.getElementById("dlugosc").innerHTML+=data[0].dlugosc;
       document.getElementById("miastonad").innerHTML+=data[0].miastonad;
       document.getElementById("ulicanad").innerHTML+=data[0].ulicanad;
       document.getElementById("nrmiesznad").innerHTML+=data[0].nrmiesznad;
       document.getElementById("kodnad").innerHTML+=data[0].kodnad;
       document.getElementById("miastood").innerHTML+=data[0].miastood;
       document.getElementById("ulicaod").innerHTML+=data[0].ulicaod;
       document.getElementById("nrmieszod").innerHTML+=data[0].nrmieszod;
       document.getElementById("kodod").innerHTML+=data[0].kodod;
       document.getElementById("nadawca").innerHTML+=data[0].nadawca;
       document.getElementById("nrpaczki").innerHTML+=data[0].nrpaczki;

       
   
  },
  error : function(xhr, status) {
        alert('Przepraszamy, wystąpił problem!'+status);
    },
  
  complete : function(xhr, status) {
        
    }
  
});


//});
});
//document.getElementById("login").innerHTML+=userdb.name;
</script>


