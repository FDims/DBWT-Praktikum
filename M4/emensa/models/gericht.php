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
$sql1= "SELECT id, name, preis_intern , preis_extern FROM gericht ORDER BY name ASC ";
$result1= mysqli_query($link,$sql1);
$sql2= "SELECT gericht_id, code FROM gericht_hat_allergen";
$result2=mysqli_query($link,$sql2);
for($i=0;$i<5;$i++){
    $line=null;
    $row1=mysqli_fetch_assoc($result1);
    echo '<tr>';
    echo '<td class="menulist">'.$row1['name'].'<br>';
    $sql2= "SELECT gericht_id, code FROM gericht_hat_allergen WHERE gericht_id=".$row1['id'];
    $result2=mysqli_query($link,$sql2);
    while($row2=mysqli_fetch_assoc($result2)){
        $line=$line.$row2['code'].', ';
    }
    if($line) {
        echo '[' . $line . ']';
    }
    echo '</td>';
    echo '<td class="menulist">'.number_format($row1['preis_intern'],2,',','.').'</td>';
    echo '<td class="menulist">'.number_format($row1['preis_extern'],2,',','.').'</td>';
}}
