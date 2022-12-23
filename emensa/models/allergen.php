<?php
function allergen(){
    $link = connectdb();
    $sql3="SELECT code, name, typ FROM allergen order by typ";
    $result3=mysqli_query($link,$sql3);
    $data = mysqli_fetch_all($result3,MYSQLI_BOTH);

    mysqli_close($link);
    return $data ;
}

