<?php
$link = mysqli_connect(
    "localhost", // Host der Datenbank
    "root", // Benutzername zur Anmeldung
    "root", // Passwort zur Anmeldung
    "emensawerbeseite", // Auswahl der Datenbank
    3306);
if (!$link) {
    echo "Verbindung fehlgeschlagen: ", mysqli_connect_error();
    exit();
}

function passwort (string $passwort) : string{
    $salt = "Team_905";
    return sha1($salt.$passwort);
}
