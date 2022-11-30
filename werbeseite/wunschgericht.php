<?php
date_default_timezone_set('Europe/Berlin');
$datum = "Zeitzone : ".date_default_timezone_get()."\tDatum : ".date("d.m.y")."\tAktuelle Zeit : ".date("H:i:s");

$link = mysqli_connect(
    "localhost", // Host der Datenbank
    "root", // Benutzername zur Anmeldung
    "2804", // Passwort zur Anmeldung
    "emensawerbeseite", // Auswahl der Datenbank
    3306);
if (!$link) {
    echo "Verbindung fehlgeschlagen: ", mysqli_connect_error();
    exit();
}

$Name=NUll;
$email = NUll;
$Gericht = NUll;
$Beschreibung = NULL;
$Fehler=NULL;
$Fehler1=NULL;
$Fehler2=NULL;
if(isset($_POST['submitted'])){
    $Name=trim($_POST['Name']??NULL);
    $Email =trim($_POST['E-Mail']??NULL);
    $Gericht=trim($_POST['Namegericht']??NULL);
    $Beschreibung=trim($_POST['Beschreibung']??NULL);

    if(empty($Email)){
        $Fehler="Email muss gestzt werden!";
    }
    if(empty($Gericht)){
        $Fehler1="Gercihtsname muss gesetzt werden!";
    }
    if(empty($Beschreibung)){
        $Fehler2="Beschreibung muss gesetzt werden!";
    }
    if (!$Fehler&&!$Fehler1&&$Fehler2) {
        $input =['Name'=>str_replace("\'","",$Name),
            'E-Mail'=>str_replace("\'","",$Email),
            'Gericht'=>str_replace("\'","",$Gericht),
            'Beschreibung'=>str_replace("\'","",$Beschreibung)
        ];
        $WriteAnmelder="INSERT INTO emensawerbeseite.wunschgericht (Name, Email, Gerict, Beschreibung, date) VALUES ('".$input['Name'].
            "', '".$input['E-Mail']."', '".$input['Gericht']."', '".$input['Beschreibung']."', '".$datum."')";
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>E-Mensa wunschgericht</title>
    <link rel="stylesheet" href="stylesheetnew.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <a href="Werbeseite.php" id="logo"><h1 class="head">
            E-Mensa
        </h1></a>
</header>
<main>
    <?php
    if(isset($_POST['submitted'])){
        if($Fehler||$Fehler1||$Fehler2){
            echo '<div class="Fehler">'.'Fehler: ';
            if($Fehler){
                echo '<br>'.$Fehler;
            }
            if($Fehler1){
                echo '<br>'.$Fehler1;
            }
            if($Fehler2){
                echo '<br>'.$Fehler2;
            }
            echo '</div>';
        }else{
            echo '<div class="popup">
                <div>
                <h1>Anmeldung erfolgreich!</h1>
                <p><a href="Werbeseite.php">back to main site</a></p>
                </div>
                </div>';
        }
    }?>

    <fieldset>
        <legend>Ihre Wunschgericht</legend>
    <form method="post" action="wunschgericht.php">
        <input type="hidden" name="submitted" value="1">

        <div >
            <label for="Name">Ihr Name:</label> <br>
            <input type="text" name="Name" id="Name" placeholder="Name" maxlength="100">
        </div>

        <div >
            <label for="email">Ihr E-Mail:</label> <br>
            <input type="email" name="E-Mail" id="email" placeholder="E-mail" required>
        </div>

        <div >
            <label for="Namegericht">Name des Gerichts:</label> <br>
            <input type="text" name="Namegericht" id="Namegericht" placeholder="Name des Gerichts" required>
        </div>

        <div >
            <label for="Beschreibung">Beschreibung:</label> <br>
            <input type="text" name="Beschreibung" id="Beschreibung" placeholder="Beschreibung" maxlength="100" required>
        </div>

        <button type="submit" name="submit" value="submit" id="submit">Wunsch abschicken</button>
    </form>
    </fieldset>
</main>
<footer>
    <ul class="foot">
        <li class="flist">&copy; E-Mensa GmbH</li>
        <li class="flist">(Ihre Namen hier)</li>
        <li><a>Impressum</a></li>
    </ul>
</footer>
</body>
</html>

