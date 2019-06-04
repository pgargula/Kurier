<?php
include('../php/session.php');
include("../php/dbConnect.php");
                    
$query=mysqli_query($link,"SELECT ID_TRANSAKCJE, STAN FROM TRANSAKCJE WHERE NR_PACZKI='$_POST[nrprzesylki]';");
    while ($tabnad= mysqli_fetch_assoc($query)){
   $_SESSION['id_transakcji']=$tabnad['ID_TRANSAKCJE'];
    echo" <h2>Status</h2>";
    if($tabnad['STAN']==1)
        {echo "<div class=\"alert alert-info\" role=\"alert\">W oczekiwaniu</div>";}
    if($tabnad['STAN']==2)
        {echo "<div class=\"alert alert-info\" role=\"alert\">Odebrana przez kuriera</div>";}
    if($tabnad['STAN']==3)
        {echo "<div class=\"alert alert-warning\" role=\"alert\">W drodze</div>";}
    if($tabnad['STAN']==4)
        {echo "<div class=\"alert alert-success\" role=\"alert\">Dostarczona</div>";}
        }
include('../views/szczegoly.php');

?>