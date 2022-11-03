<?php echo "Test";
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
        <th class="menulist"></th>
        <th class="menulist">Preis intern</th>
        <th class="menulist">Preis extern</th>
        </tr>

        <tr>
            <td class="menulist"><?php echo $Gerichte[1]['name']?></td>
            <td class="menulist"><?php echo $Gerichte[1]['pint']?></td>
            <td class="menulist"><?php echo $Gerichte[1]['pext']?></td>
        </tr>
        <tr>
            <td class="menulist"><?php echo $Gerichte[2]['name']?></td>
            <td class="menulist"><?php echo $Gerichte[2]['pint']?></td>
            <td class="menulist"><?php echo $Gerichte[2]['pext']?></td>
        </tr>
        <tr>
            <td class="menulist"><?php echo $Gerichte[3]['name']?></td>
            <td class="menulist"><?php echo $Gerichte[3]['pint']?></td>
            <td class="menulist"><?php echo $Gerichte[3]['pext']?></td>
        </tr>
        <tr>
            <td class="menulist"><?php echo $Gerichte[4]['name']?></td>
            <td class="menulist"><?php echo $Gerichte[4]['pint']?></td>
            <td class="menulist"><?php echo $Gerichte[4]['pext']?></td>
        </tr>
    </table>
    <br>
    <?php
    for($i = 1;$i<5;$i++){
        echo $Gerichte[$i]['bild'].'<br>'.$Gerichte[$i]['name'].'<br>';
    }
    ?>

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
    <form action="pause">
        <div class="form">
        <label for="Vorname">Ihr Name:</label> <br>
        <input type="text" name="Vorname" id="Vorname" placeholder="Vorname" required>
        </div>
        <div class="form">
            <label for="email">Ihr Name:</label> <br>
            <input type="text" name="E-Mail" id="email" required>
        </div>
        <div class="form">
            <label for="sprache">Newsletter bitte im:</label> <br>
            <select id="sprache">
                <option>Deutsch</option>
                <option>English</option>
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