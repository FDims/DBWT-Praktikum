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
    <input type="submit" value="Addieren">
</form> <br>
<?php
if($_POST) {
    $ein1 = $_POST['ein1'];
    $ein2 = $_POST['ein2'];}
if(isset($ein1)&&isset($ein2)) echo 'Ergebnis = ',addieren((int)$ein1,(int)$ein2);
?>
</body>
</html>