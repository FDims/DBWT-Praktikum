<?php
function db_benutzer_anmeldung($email){
    $link = connectdb();
    $query = " SELECT * FROM benutzer WHERE email = '$email'";
    return mysqli_query($link,$query);
}

function letzteAnmeldung($email){
    $link = connectdb();
    $query = " UPDATE benutzer SET anzahlanmeldungen= anzahlanmeldungen+1, letzteanmeldungen= CURRENT_TIMESTAMP WHERE email = '$email'";
    mysqli_query($link,$query);
}
function fehlerAnmeldung($email){
    $link = connectdb();
    $query = " UPDATE benutzer SET anzahlfehler= anzahlfehler+1,letztefehler= CURRENT_TIMESTAMP WHERE email = '$email'";
    mysqli_query($link,$query);
}
