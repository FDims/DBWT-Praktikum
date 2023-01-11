<?php
function addBewertung($benutzerid , $bemerkung , $gerichtid , $sterne)
{
    $link = connectdb();
    $Bemueberprueft = mysqli_real_escape_string($link, $bemerkung);

    $sql="INSERT INTO bewertung(gericht_id, bemerkung, sternebewertung, bewertungszeitpunkt, benutzer_id, hervorgehoben) VALUES 
          ('$gerichtid', '$bemerkung', '$sterne', CURRENT_TIMESTAMP, '$benutzerid', false)";

    $link->query($sql);
    $link->close();
}