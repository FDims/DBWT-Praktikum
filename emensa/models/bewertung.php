<?php
function addBewertung($benutzerid , $bemerkung , $gerichtid , $sterne, $gerichtname)
{
    $link = connectdb();

    $sql="INSERT INTO bewertung(gericht_id, gericht_name ,bemerkung, sternebewertung, bewertungszeitpunkt, benutzer_id, hervorgehoben) VALUES 
          ('$gerichtid', '$gerichtname','$bemerkung', '$sterne', CURRENT_TIMESTAMP, '$benutzerid', false)";

    $link->query($sql);
    $link->close();
}
function letzte30bewertung()
{
    $link = connectdb();
    $query = "SELECT * FROM bewertung ORDER BY bewertungszeitpunkt DESC LIMIT 30";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_all($result, MYSQLI_BOTH);
    mysqli_close($link);
    return $data;
}