<?php
/**
 * Praktikum DBWT. Autoren:
 * Fachrial Dimas Putra, Perdana, 3503937
 * Jericho, Jordan, 3536333
 */
$file = fopen("accesslog.txt","w");
if (!$file) {
    die('Öffnen fehlgeschlagen');
}
date_default_timezone_set('Europe/Berlin');
$datum = "Zeitzone : ".date_default_timezone_get()."\tDatum : ".date("d.m.y")."\tAktuelle Zeit : ".date("H:i:s");
$webinfo1 = "\n\nServer Name : ".$_SERVER['SERVER_NAME']."\nServer IP Adresse : ".$_SERVER['SERVER_ADDR']."\nServer Port : ".$_SERVER['SERVER_PORT'];
$webinfo2 = "\nClient IP Adresse : ".$_SERVER['REMOTE_ADDR']."\nServer Protokol : ".$_SERVER['SERVER_PROTOCOL'];
fwrite($file,$datum);fwrite($file,$webinfo1);fwrite($file,$webinfo2);
fclose($file);