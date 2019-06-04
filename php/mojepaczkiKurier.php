<?php
include('../php/session.php');
if (isset($_GET['id'])){
    
    $_SESSION['id_transakcji']= $_GET['id'];   
    include('../views/szczegoly.php');   
   
    
   
    
}

if (isset($_GET['idT'])){
    $idkurier=$_SESSION["ID"];
    $idT = $_GET['idT'];
    mysqli_query($link, "UPDATE TRANSAKCJE
    SET ID_KURIER='$idkurier', STAN=STAN+1
    WHERE ID_TRANSAKCJE='$idT';  ");
    
    
    
}


    $id=$_SESSION['ID']; 
$q = mysqli_query($link, "select T.ID_TRANSAKCJE, ANAD.MIASTO AS MIASTONAD, AODB.MIASTO AS MIASTOODB, P.TYP, P.CENA, T.STAN from TRANSAKCJE T inner join PRZESYLKA P on P.ID_PRZESYLKA=T.ID_PRZESYLKA inner join UZYTKOWNICY U on U.ID_UZYTKOWNIK=T.ID_UZYTKOWNIK 
left Join Adres ANAD on ANAD.ID_Adres=T.ID_ADRES_NAD
left join Adres AODB on AODB.ID_Adres=T.ID_ADRES_ODB 
Where ID_KURIER='$id';");




while ($tabl = mysqli_fetch_assoc($q)){
    $tabl['MIASTONAD'] = htmlspecialchars($tabl['MIASTONAD']);
    $tabl['MIASTOODB'] = htmlspecialchars($tabl['MIASTOODB']);
    $tabl['TYP'] = htmlspecialchars($tabl['TYP']);
    
   
   
    echo "<tr><td>$tabl[MIASTONAD]</td><td>$tabl[MIASTOODB]</td><td>$tabl[TYP]</td><td>$tabl[CENA]</td><td><a class=\"btn btn-danger\" href='?id=$tabl[ID_TRANSAKCJE]'>SZCZEGÓŁY</a></td><td>"; 
         if($tabl['STAN']==2)
            {echo"<div class=\"alert alert-info\" role=\"alert\">odebrana</div></td><td><a class=\"btn btn-warning\" href='?idT=$tabl[ID_TRANSAKCJE]'>w drodze</a></td>";}
        if($tabl['STAN']==3)
            {echo"<div class=\"alert alert-warning\" role=\"alert\">w drodze</div></td><td><a class=\"btn btn-success\" href='?idT=$tabl[ID_TRANSAKCJE]'>dostarczono</a></td>";}
            if($tabl['STAN']>=4)
            {echo"<div class=\"alert alert-success\" role=\"alert\">zakończona</div></td><td>-</td>";}
        "</tr>";}


?>           