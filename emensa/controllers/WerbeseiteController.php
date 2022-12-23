<?php

require_once('../models/gericht.php');
require_once('../models/allergen.php');

class WerbeseiteController{
    public function werbeseite(RequestData $rd)
    {
        $gerichte = db_gericht_tabelle();
        $allergen = allergen();
        $anzahl=gericht_Anzahl();
        $ips = NULL;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ips = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ips = $_SERVER['REMOTE_ADDR'];
        }
        logger()->info($ips.' Zugriff auf Hauptseite');
        return view('werbeseite', [
            'gerichte' => $gerichte,
            'allergen' => $allergen,
            'anzahl' => $anzahl,
        ]);
    }

}