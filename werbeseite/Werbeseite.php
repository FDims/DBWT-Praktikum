<?php
/**
 * Praktikum DBWT. Autoren:
 * Fachrial Dimas Putra, Perdana, 3503937
 * Jericho, Jordan, 3536333
 */
session_status();
$ip = NULL;
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
    $ip = $_SERVER['REMOTE_ADDR'];
}
$date = date("d.m.Y");

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

$Name = '';
$Email = '';
$sprache='';
$fehler=NULL;
$fehler1=NULL;


if(isset($_POST['submitted'])) {
    $Name = str_replace("\'","",trim($_POST['Name']??NULL));
    $sprache=$_POST['sprache'];
    $Email = str_replace("\'","",trim($_POST['E-Mail'] ??NULL));
    $fehler=false;
    $fehler1=false;
    if (empty($Name)) {
        $fehler = 'Name muss gesetzt werden';
    }
    if (empty($Email)) {
        $fehler1 = 'E-Mail-Adresse muss gesetzt werden';
    } else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $fehler1 = 'E-Mail-Adresse ist nicht korrekt formatiert';
    }
    if (!$fehler&&!$fehler1) {
        $datei = [
            'Name'=>mysqli_real_escape_string($link,$Name),
            'E-Mail'=>mysqli_real_escape_string($link,$Email),
            'Sprache'=>$sprache,
        ];
        $WriteAnmelder="INSERT INTO emensawerbeseite.anmelder (name, email, sprache) VALUES ('".$datei['Name'].
                        "', '".$datei['E-Mail']."', '".$datei['Sprache']."')";
        mysqli_query($link,$WriteAnmelder);
    }

}
?>
<?php ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Ihre E-Mensa</title>
    <link rel="stylesheet" href="stylesheetnew.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
</head>
<body>
<?php
if(isset($_POST['submitted'])){
    if($fehler||$fehler1){
        echo '<div class="Fehler">'.'Fehler: ';
        if($fehler){
            echo '<br>'.$fehler;
        }
        if($fehler1){
            echo '<br>'.$fehler1;
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
<nav>
    <a href="Werbeseite.php" id="logo"><h1 class="head">
        E-Mensa
    </h1></a>
    <ul class="headlist head">
        <li><a href="#ankundigung">Ankündigung</a></li>
        <li><a href="#speisen">Speisen</a></li>
        <li><a href="#zzahlen">Zahlen</a></li>
        <li><a href="#kontakt">Kontak</a></li>
        <li><a href="#unswichtig">Wichtig für uns</a></li>
    </ul>
</nav>
<main>

    <img src="csm_mensenbistroskaffeebars_5bfbc30139.jpg" alt="Mensa Photo" id="Mensaphoto">


    <h2 id="ankundigung">Bald gibt es Essen auch Online ;)</h2>
    <fieldset class="desc"><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
            est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
            no sea takimata sanctus est Lorem ipsum dolor sit amet.</p></fieldset>


    <h2 id="speisen">Köstlichkeiten, die Sie erwarten</h2>
    <table id="menu">
        <tbody>
        <tr>

            <th class="menulist">Gerichte</th>
            <th class="menulist">Preis intern</th>
            <th class="menulist">Preis extern</th>
        </tr>
        <?php
        $sql1= "SELECT id, name, preis_intern , preis_extern FROM gericht ORDER BY name ASC ";
        $result1= mysqli_query($link,$sql1);
        $sql2= "SELECT gericht_id, code FROM gericht_hat_allergen";
        $result2=mysqli_query($link,$sql2);
        for($i=0;$i<5;$i++){
            $line=null;
            $row1=mysqli_fetch_assoc($result1);
            echo '<tr>';
            echo '<td class="menulist">'.$row1['name'].'<br>';
            $sql2= "SELECT gericht_id, code FROM gericht_hat_allergen WHERE gericht_id=".$row1['id'];
            $result2=mysqli_query($link,$sql2);
            while($row2=mysqli_fetch_assoc($result2)){
                    $line=$line.$row2['code'].', ';
            }
            if($line) {
                echo '[' . $line . ']';
            }
            echo '</td>';
            echo '<td class="menulist">'.number_format($row1['preis_intern'],2,',','.').'</td>';
            echo '<td class="menulist">'.number_format($row1['preis_extern'],2,',','.').'</td>';
        }
        ?>
        </tbody>
    </table>
    <br>
    <ul id="allergen">
    <?php
    $sql3="SELECT code, name, typ FROM allergen order by typ";
    $result3=mysqli_query($link,$sql3);
    $hilf_bool = true;
    $typ=null;
    while($row3=mysqli_fetch_assoc($result3)) {
        if ($typ == $row3['typ']) {
            $hilf_bool = false;
        } else {
            $hilf_bool = true;
            echo '<br><br>';
            $typ = $row3['typ'];
        }
        if ($hilf_bool) {
            echo $row3['typ'] . '=' . '<br>';
        }
        echo '<li>'.$row3['code'] . ': ' . $row3['name'] . '</li>';

    }
    ?>
    </ul>
    <br>
    <h2 id="zzahlen">E-Mensa in Zahlen</h2>
    <div class="Zahl">
        <div class="zahlen">
            <h4><?php
                $sql4="SELECT * FROM besucher WHERE 
                           `IP-Adresse`='$ip' AND
                           `Date`='$date'";
                $result4=mysqli_query($link,$sql4);
                if(mysqli_num_rows($result4)==0){
                    $sql4 = "INSERT INTO besucher(`IP-Adresse`, Date) VALUES ('$ip','$date')";
                    mysqli_query($link,$sql4);
                }
                $sql4="SELECT COUNT(`IP-Adresse`) FROM besucher";
                $result4=mysqli_query($link,$sql4);
                $row4 = mysqli_fetch_array($result4);
                $Besucher =$row4[0];
                echo $Besucher ;?></h4>
            <h4>Besucher</h4>
        </div>
        <div class="zahlen">
            <h4><?php
                $sqla="SELECT COUNT(id) FROM anmelder";
                $resulta=mysqli_query($link,$sqla);
                $row5=mysqli_fetch_array($resulta);
                $anzahl=$row5[0];
                echo $anzahl;
                ?></h4>
            <h4>Anmeldungen zum Newsletter</h4>
        </div>
        <div class="zahlen">
            <h4><?php
                    $sql1= "SELECT COUNT(id) FROM gericht ";
                    $result1= mysqli_query($link,$sql1);
                    $row4=mysqli_fetch_array($result1);
                    $AnzahlSpeisen=$row4[0];
                    echo $AnzahlSpeisen;
                    ?></h4>
            <h4>Speisen</h4>
        </div>
    </div>


    <h2 id="kontakt">Interesse geweckt? Wir informieren Sie!</h2>
    <form method="post" action="Werbeseite.php">
        <input type="hidden" name="submitted" value="1">

        <div class="form">
            <label for="Name">Ihr Name:</label> <br>
            <input type="text" name="Name" id="Name" placeholder="Name" required>
        </div>

        <div class="form">
            <label for="email">Ihr E-Mail:</label> <br>
            <input type="email" name="E-Mail" id="email" required>
        </div>

        <div class="form">
            <label for="sprache">Newsletter bitte im:</label> <br>
            <select id="sprache" name="sprache">
                <option value="Deutsch">Deutsch</option>
                <option value="English">English</option>
            </select>
        </div>

        <br>
        <input type="checkbox" required>Den Datenschutzbestimmungen stimme ich zu
        <button type="submit" name="submit" value="submit" id="submit">Zum Newsletter anmelden</button>
    </form>

    <h2>Haben Sie ein Wunschgericht ?</h2>
    <a href="wunschgericht.php">Klicken Sie Hier!</a>
    <h3>5 Neueste Wunschgericht</h3>
    <table id="table_wunschgericht">
        <tr>
            <th class="wunschgericht">Name</th>
            <th class="wunschgericht">Gericht</th>
            <th class="wunschgericht">Beschreibung</th>
            <th class="wunschgericht">Datum</th>
        </tr>

        <?php
        $sql1= "SELECT id,Name,Gerict,Beschreibung,date FROM wunschgericht ORDER BY id DESC LIMIT 5";
        $result1= mysqli_query($link,$sql1);
        while($row3=mysqli_fetch_assoc($result1)) {
            echo '<tr>';
            echo '<td class="wunschgericht">'.$row3['Name'].'</td>';
            echo '<td class="wunschgericht">'.$row3['Gerict'].'</td>';
            echo '<td class="wunschgericht">'.$row3['Beschreibung'].'</td>';
            echo '<td class="wunschgericht">'.$row3['date'].'</td>';
            echo '</tr>';
        }
        ?>
    </table>


    <h2 id="unswichtig"> Das ist uns wichtig</h2>
    <ul class="wichtig">
        <li>Beste frische saisonale Zutaten</li>
        <li>Ausgewogene abwechslungsreiche Gerichte</li>
        <li>Sauberkeit</li>
    </ul>


    <h2 class="closing">Wir freuen uns auf Ihren Besuch</h2>
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