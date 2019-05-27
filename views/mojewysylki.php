<?php

include'../php/session.php';
if($_SESSION["typ"]!=1)
    {
    header("location:Startowa.php");}
include'../php/dbConnect.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Panel Kuriera 4G</title>
        <link rel="stylesheet" href="../style/paczka_style.css">
        <link rel="stylesheet" href="../style/tabela.css">
        <script type="text/javascript" src="../js/menu.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
   
   <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<style>
    
    </style>

    </head>

    <body>
    <?php 
            
            include('navbarLog.php');
           
            ?>







       <form method="post"  class="row justify-content-md-center ">
        <div class="box" >

        
        <?php

if (isset($_GET['id'])){
    $_SESSION['id_transakcji']= $_GET['id'];   
include('../views/szczegoly.php');    
}
        ?>
        
            
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Skąd</th>
                <th>Dokąd</th>
                <th>Typ</th>
                <th>Cena</th>
                <th>Akcja</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
include('../php/mojewysylki.php')
?>           
            </tbody>
        <tfoot>
            <tr>
            
                <th>Skąd</th>
                <th>Dokąd</th>
                <th>Typ</th>
                <th>Cena</th>
                <th>Akcja</th>
                <th>Status</th>
        
            </tr>
        </tfoot>
    </table>

    </div>
    </form>
</form>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );





 


</script>

</body>