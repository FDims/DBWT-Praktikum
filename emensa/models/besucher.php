<?php
function Anzahl_Besucher(){
    $link = connectdb();
    $sqla="SELECT COUNT(`IP-Adresse`) FROM besucher";
    $resulta=mysqli_query($link,$sqla);
    $row5=mysqli_fetch_array($resulta);

    return $row5[0];
}

function insert_IP($ip,$date){
    $link=connectdb();
    $sql4="SELECT * FROM besucher WHERE 
                           `IP-Adresse`='$ip' AND
                           `Date`='$date'";
    $result4=mysqli_query($link,$sql4);
    if(mysqli_num_rows($result4)==0){
        $sql4 = "INSERT INTO besucher(`IP-Adresse`, Date) VALUES ('$ip','$date')";
        mysqli_query($link,$sql4);
    }
}