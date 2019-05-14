function pokaz(){
    $('#pud').fadeIn(900);
}
function schowaj(){
    $('#pud').fadeOut(200);
}
function menusp(){
    var klikniety = document.getElementById("chk").checked;
    if(klikniety==true){
        schowaj();
    }
    else{
        pokaz();
    }
}

