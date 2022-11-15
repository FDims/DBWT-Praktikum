<?php
/**
 * Praktikum DBWT. Autoren:
 * Fachrial Dimas Putra, Perdana, 3503937
 * Jericho, Jordan, 3536333
 */
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
$Gerichte = [
    1 => ['name' => 'Rindfleisch mit Bambus, Kaiserschoten und rotem Paprika, dazu Mie Nudeln',
        'pint' => '3,50','pext' => '6,20','bild' => '<img class ="imag" src=./img/1-gerichte.jpg alt="Rindfleisch Bambus Mie"> '],
    2 => ['name' => 'Spinatrisotto mit kleinen Samosateigecken und gemischter salat',
        'pint' => '2,90','pext' => '5,30','bild' => '<img class ="imag" src="./img/2-gerichte.jpg" alt="Spinatrisotto">'],
    3 => ['name' => 'Lachsteriyaki, Frühlingszwiebelgemüse, dazu Mienudeln',
        'pint' => '3,50','pext' => '6,20','bild' => '<img class ="imag" src="./img/3-gerichte.jpeg" alt="Lachsteriyaki">'],
    4 => ['name' => 'Grüner Thai Curry mit Garnelen mit Korianderreis',
        'pint' => '3,90','pext' => '6,30','bild' => '<img class ="imag" src="./img/4-gerichte.png" alt="Grüner Thai Curry">']
];


$Name = '';
$Email = '';
$sprache='';
$fehler=NULL;
$fehler1=NULL;


if(isset($_POST['submitted'])) {
    $Name = trim($_POST['Name']??NULL);
    $sprache=$_POST['sprache'];
    $Email = $_POST['E-Mail'] ??NULL;
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
            'Name'=>$Name,
            'E-Mail'=>$Email,
            'Sprache'=>$sprache,
        ];
        $file = fopen("Newsletter.txt",'w');
        foreach ($datei as $key=>$dateien){
            fwrite($file,$dateien.' ');
        }
        fclose($file);
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
        echo '<div class="success">'.'Anmeldung erfolgreich!'.'</div>';
    }
}?>
<header>
    <h1 class="head">
        E-Mensa
    </h1>
    <ul class="headlist head">
        <li><a href="#ankundigung">Ankündigung</a></li>
        <li><a href="#speisen">Speisen</a></li>
        <li><a href="#zzahlen">Zahlen</a></li>
        <li><a href="#kontakt">Kontak</a></li>
        <li><a href="#unswichtig">Wichtig für uns</a></li>
    </ul>
</header>
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
        <tr>
            <th class="menulist">Bild</th>
            <th class="menulist">Gerichte</th>
            <th class="menulist">Preis intern</th>
            <th class="menulist">Preis extern</th>
        </tr>
        <?php
        foreach($Gerichte as $gericht){
            echo '<tr>';
            echo '<td class="menulist menubild">'.$gericht['bild'].'</td>';
            echo '<td class="menulist">'.$gericht['name'].'</td>';
            echo '<td class="menulist">'.$gericht['pint'].'</td>';
            echo '<td class="menulist">'.$gericht['pext'].'</td>';
            echo '</tr>';
        }
        $sql1= "SELECT id, name, preis_intern , preis_extern FROM gericht ORDER BY name";
        $result1= mysqli_query($link,$sql1);
        $sql2= "SELECT gericht_id, code FROM gericht_hat_allergen";
        $result2=mysqli_query($link,$sql2);
        for($i=0;$i<5;$i++){
            $line=null;
            $row1=mysqli_fetch_assoc($result1);
            echo '<tr>';
            echo '<td class="menulist menubild">'.'leider noch Keine Bild'.'</td>';
            echo '<td class="menulist">'.$row1['name'].'<br>';
            while($row2=mysqli_fetch_assoc($result2)){
                if($row1['id']==$row2['gericht_id']){
                    $line=$line.$row2['code'].', ';
                }
            }
            if($line) {
                echo '[' . $line . ']';
            }
            echo '</td>';
            echo '<td class="menulist">'.number_format($row1['preis_intern'],2,',','.').'</td>';
            echo '<td class="menulist">'.number_format($row1['preis_extern'],2,',','.').'</td>';
        }
        ?>
    </table>
    <br>
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
        echo $row3['code'] . ': ' . $row3['name'] . ',';

    }
    ?>
    <br>
    <h2 id="zzahlen">E-Mensa in Zahlen</h2>
    <div class="Zahl">
        <div class="zahlen">
            <h4>X</h4>
            <h4>Besucher</h4>
        </div>
        <div class="zahlen">
            <h4>Y</h4>
            <h4>Anmeldungen zum Newsletter</h4>
        </div>
        <div class="zahlen">
            <h4>Z</h4>
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