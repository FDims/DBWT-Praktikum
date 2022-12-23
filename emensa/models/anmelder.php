<?php
function Anzahl_Anmelder(){
    $link = connectdb();
    $sqla="SELECT COUNT(id) FROM anmelder";
    $resulta=mysqli_query($link,$sqla);
    $row5=mysqli_fetch_array($resulta);
    return $row5[0];
}
function Insert_Anmelder($Name,$Email,$sprache){
    $link = connectdb();
    $datei = [
        'Name'=>mysqli_real_escape_string($link,$Name),
        'E-Mail'=>mysqli_real_escape_string($link,$Email),
        'Sprache'=>$sprache,
    ];
    $WriteAnmelder="INSERT INTO emensawerbeseite.anmelder (name, email, sprache) VALUES ('".$datei['Name'].
        "', '".$datei['E-Mail']."', '".$datei['Sprache']."')";
    mysqli_query($link,$WriteAnmelder);
    mysqli_close();
}
