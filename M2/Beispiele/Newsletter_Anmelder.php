<?php
/**
 * Praktikum DBWT. Autoren:
 * Fachrial Dimas Putra, Perdana, 3503937
 * Jercio, Jordan, 3536333

 */?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Newsletter Anmeldung</title>
</head>
<body>
<?php
$anrede = '';
$Vorname = '';
$Nachname = '';
$Email = '';
$fehler=NULL;
//$fehler1=NULL;
//$fehler2=NULL;

if(isset($_POST['submitted'])) {
    $anrede = $_POST['anrede']??NULL;
    $Vorname = trim($_POST['Vorname']??NULL);
    $Nachname = trim($_POST['Nachname']??NULL);
    $Email = $_POST['email'] ??NULL;
    $fehler=false;
    $fehler1=false;
    $fehler2=false;
    if (empty($Vorname)) {
        $fehler = 'Vorname muss gesetzt werden';
    }
    if (empty($Nachname)) {
      $fehler1 = 'Nachname muss gesetzt werden';
     }
    if (empty($Email)) {
     $fehler2 = 'E-Mail-Adresse muss gesetzt werden';
     } else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $fehler2= 'E-Mail-Adresse ist nicht korrekt formatiert';
     }
    if (!$fehler||!$fehler1||!$fehler2) {
        //....
    }
}
?>
<form method="post" action="Newsletter_Anmelder.php">
    <?php if($fehler||$fehler1||$fehler2){
        echo '<div>'.'Fehler: ';
        if($fehler){
            echo '<br>'.$fehler;
        }
        if($fehler1){
            echo '<br>'.$fehler1;
        }
        if($fehler2){
            echo '<br>'.$fehler2;
        }
        echo '</br>';
    }?>
    <fieldset>
        <legend>Anmeldung</legend>

        <input type="hidden" name="submitted" value="1">

        <label>Anrede :</label><br>
        <input type="radio" name="anrede" id="anrede1" value="Frau" <?php echo $anrede=='Frau'?'checked':''?>>Frau<br>
        <input type="radio" name="anrede" id="anrede2" value="Herr" <?php echo $anrede=='Herr'?'checked':''?>>Herr<br>

        <label for="Vorname">Vorname*</label><br>
        <input type="text" name="Vorname" placeholder="Bitte geben SIe Ihren Vornamen ein" size="30" id="Vorname" value="<?php echo $Vorname ?>"><br>

        <label for="Nachname">Nachname*</label><br>
        <input type="text" name="Nachname" placeholder="Bitte geben SIe Ihren Nachname ein" size="30" id="Nachname" value="<?php echo $Nachname ?>"><br>

        <label for="email">E-Mail*</label><br>
        <input type="email" name="email" id="email" placeholder="Bitte geben SIe Ihre E-Mail ein" size="30" value="<?php echo $Email ?>"><br>

        <label for="interval">Benachrichtigungsinterval</label><br>
        <select name="interval" id="interval">
            <option value="Taeglich" <?php echo $anrede=='Taeglich'?'selected':''?>>Täglich</option>
            <option value="Wochenlich" <?php echo $anrede=='Wochenlich'?'selected':''?>>Wochenlich</option>
            <option value="Monatlich" <?php echo $anrede=='Monatlich'?'selected':''?>>Monatlich</option>
        </select>

        <br>
        <input type="checkbox" required>Datenschutzhinweise gelesen
        <br>

        <input type="submit" name="submitted" value="Abschicken">
        <br>

        <p><sup>*)</sup>Eingaben sind Pflicht</p>
    </fieldset>
</form>
</body>
</html>

