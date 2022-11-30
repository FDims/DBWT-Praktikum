<?php
date_default_timezone_set('Europe/Berlin');
$datum = "Zeitzone : ".date_default_timezone_get()."\tDatum : ".date("d.m.y")."\tAktuelle Zeit : ".date("H:i:s");




?>
<form method="post" action="wunschgericht.php">
        <input type="hidden" name="submitted" value="1">

        <div class="form">
            <label for="Name">Ihr Name:</label> <br>
            <input type="text" name="Name" id="Name" placeholder="Name">
        </div>

        <div class="form">
            <label for="email">Ihr E-Mail:</label> <br>
            <input type="email" name="E-Mail" id="email" placeholder="E-mail" required>
        </div>

    <div class="form">
        <label for="Namegericht">Name des Gerichts:</label> <br>
        <input type="text" name="Namegericht" id="Namegericht" placeholder="Name des Gerichts" required>
    </div>

    <div class="form">
        <label for="Beschreibung">Beschreibung:</label> <br>
        <input type="text" name="Beschreibung" id="Beschreibung" placeholder="Beschreibung" required>
    </div>

<button type="submit" name="submit" value="submit" id="submit">Wunsch abschicken</button>
    </form>