<?php
/**
 * Praktikum DBWT. Autoren:
 * Fachrial Dimas Putra, Perdana, 3503937
 * Jericho, Jordan, 3536333
 */
$file = fopen('en.txt','r'); $gefunden = false;
$fehler = false;
$searched=NULL;
$translate=NULL;
if(isset($_GET['suche'])) {
    $searched = $_GET['suche'];
    while (!feof($file)) {
        $line = fgets($file, 1024);
        $word = explode(';',$line);
        if (strtolower($word[0])==strtolower($searched)) {
            $gefunden = true;
            $translate=$word[1];
        }
    }
    if (!$gefunden) {
       $fehler= "Das gesuchte Wort" . '<suche>' . " ist nicht enthalten";
    }
}
fclose($file);
?>

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
    <input type="text" name="suche" placeholder="<?php echo !empty($searched)?$searched:'Bitte geben Sie ein Wort';?>" size="30" id="suche" required><br>
    <input type="submit" id="submit">
</form>
<?php  echo $fehler? $fehler:'English :'.$translate; ?>
</body>
</html>

