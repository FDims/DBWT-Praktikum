<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"/>
    <title>ShowText</title>
    <style>
        * {
            font-family: Arial;
        }
    </style>
</head>
<body>
<form method="get">
    <label for="suche">Suchen*</label><br>
    <input type="text" name="suche" placeholder="Bitte geben Sie ein Wort" size="30" id="suche" required><br>
    <input type="submit" id="submit">
</form>
</body>
</html>

<?php
$file = fopen('en.txt','r'); $gefunden = false;
while (!feof($file)) {
    $line = fgets($file, 1024);
    if($_GET["suche"] == $line) {
        echo fgets($file, 1024);
        $gefunden = true;
    }
}
if(!$gefunden){
    echo "Das gesuchte Wort".'<suche>'." ist nicht enthalten";
}
fclose($file);
?>