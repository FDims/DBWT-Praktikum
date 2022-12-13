<?php
/**
 * Praktikum DBWT. Autoren:
 * Fachrial Dimas Putra, Perdana, 3503937
 * Jericho, Jordan, 3536333
 */
include "m2_4a_standardparameter.php";
$ein1 = 0;
$ein2 = 0;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"/>
    <title>Addieren</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
<h1>Addieren</h1>

<form method="post">
    <label for="ein1">Eingabe 1:</label>
    <input id="ein1" type="int" name="ein1">

    <label for="ein2">Eingabe 2:</label>
    <input id="ein2" type="int" name="ein2">
    <select id="op" name="op">
        <option value="add">Addition</option>
        <option value="mult">Multiplikation</option>
    </select>
    <input type="submit" value="Submit">
</form> <br>
<?php
if(isset($_POST)) {
    $ein1 = $_POST['ein1'];
    $ein2 = $_POST['ein2'];
    $typ = $_POST['op'];
}
if(isset($ein1)&&isset($ein2)) {
    if ($typ == 'add') {
        echo 'Ergebnis => ', addieren((int)$ein1, (int)$ein2);
    }
    else{
        echo 'Ergebnis => ', "$ein1 * $ein2 = " ,$ein1 * $ein2;
    }
}

?>
</body>
</html>