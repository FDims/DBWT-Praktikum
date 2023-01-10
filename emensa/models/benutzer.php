<?php
function db_benutzer_anmeldung($email){
    $link = connectdb();
    $query = " SELECT * FROM benutzer WHERE email = '$email'";
    return mysqli_query($link,$query);
}

function letzteAnmeldung($email){
    $link = connectdb();
    $link->begin_transaction();
    $query = " UPDATE benutzer SET anzahlanmeldungen= anzahlanmeldungen+1, letzteanmeldungen= CURRENT_TIMESTAMP, anzahlfehler=0 WHERE email = '$email'";
    mysqli_query($link,$query);
    $link->commit();
    //mysqli_close();
}
function fehlerAnmeldung($email){
    $link = connectdb();
    $link->begin_transaction();
    $query = " UPDATE benutzer SET anzahlfehler= anzahlfehler+1,letztefehler= CURRENT_TIMESTAMP WHERE email = '$email'";
    mysqli_query($link,$query);
    $link->commit();
    //mysqli_close();
}
function Profil($email){
    $link = connectdb();
    $query = " SELECT * FROM benutzer WHERE name = '$email'";
    $result = mysqli_query($link,$query);
    $list=mysqli_fetch_array($result,MYSQLI_BOTH);
    return $list;
}

function loginTransaktion($email)
{
    $link = connectdb();
    $query = " SELECT * FROM benutzer WHERE name = '$email'";
    $result = mysqli_query($link, $query);
    echo mysqli_error($link);
    $list = mysqli_fetch_array($result);

    $link->begin_transaction();
        $link->query("UPDATE benutzer SET letzteanmeldungen= CURRENT_TIMESTAMP, anzahlfehler=0 WHERE email = '$email'")
            echo mysqli_error($link);
        $link->query("CALL anzahlanmeldungen(".$list['id'].");");

        $link->commit();
}