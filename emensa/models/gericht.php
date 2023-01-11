<?php
/**
 * Diese Datei enthält alle SQL Statements für die Tabelle "gerichte"
 */
function db_gericht_select_all() {
    try {
        $link = connectdb();

        $sql = 'SELECT id, name, beschreibung FROM gericht ORDER BY name';
        $result = mysqli_query($link, $sql);

        $data = mysqli_fetch_all($result, MYSQLI_BOTH);

        mysqli_close($link);
    }
    catch (Exception $ex) {
        $data = array(
            'id'=>'-1',
            'error'=>true,
            'name' => 'Datenbankfehler '.$ex->getCode(),
            'beschreibung' => $ex->getMessage());
    }
    finally {
        return $data;
    }
}
function db_gericht_preisintern(){
    $link = connectdb();
    $sql = "SELECT name, preis_intern, preis_extern FROM gericht ORDER BY name DESC";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_BOTH);

    mysqli_close($link);
    return $data;
}
function db_gericht_tabelle(){
    $link = connectdb();
    $sql = "SELECT id,name, preis_intern, preis_extern,bildname FROM gericht ORDER BY name ASC LIMIT 5";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_BOTH);

    mysqli_close($link);
    return $data;
}
function gericht_Anzahl(){
    $link = connectdb();
    $sql = "SELECT COUNT(*) FROM gericht";
    $result = mysqli_query($link, $sql);
    //$data = mysqli_fetch_all($result, MYSQLI_BOTH);
    $anzahl=mysqli_fetch_array($result,MYSQLI_BOTH);
    //$AnzahlSpeisen= $data[0];
    mysqli_close($link);
    return $anzahl[0];
}
function gerichtvonid($gid){
    $link = connectdb();
    $sql = "SELECT * FROM gericht WHERE id = $gid";
    $result = mysqli_query($link, $sql);
    if($result == null) return null;
    $data = mysqli_fetch_assoc($result);
    //$AnzahlSpeisen= $data[0];
    mysqli_close($link);
    return $data;
}