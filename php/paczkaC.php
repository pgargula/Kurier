<?php
include('dbConnect.php');



$waga = $_POST['waga'];


$cena=3;




$result[]= array( 'cena' => $cena, 'waga' => $waga);

//header('Content-type:application/json;charset=utf-8');
echo json_encode($result,JSON_FORCE_OBJECT);
//echo $userdb;

/* TESTOWY AJAX

     <script> 
  var waga = document.getElementById("wysokosc").value;
  
  

$("button").click(function(){
  var waga = document.getElementById("wysokosc").value;
  var userdb = {"cena" :'', "waga" : waga};
  document.getElementById("waga").value = waga;

    
$.ajax({   
  type: 'POST',
  //dataType: "json",
  url:'../paczkaC.php',
  data:  userdb,
  success: function(data)
  {
   
    
      
      //data=JSON.parse(data);
       data= jQuery.parseJSON(data);    
       document.getElementById("wag").innerHTML+=data[0].waga;

       
   
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

*/


?>           
