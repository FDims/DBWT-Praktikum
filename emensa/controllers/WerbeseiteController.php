<?php

require_once('../models/gericht.php');
require_once('../models/allergen.php');
require_once('../models/anmelder.php');
require_once('../models/besucher.php');

class WerbeseiteController{
    public function werbeseite(RequestData $rd)
    {
        $gerichte = db_gericht_tabelle();
        $allergen = allergen();
        $anzahl_gericht=gericht_Anzahl();
        $anzahl_anmelder=Anzahl_Anmelder();
        $anzahl_besucher = Anzahl_Besucher();
        $ips = NULL;
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ips = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ips = $_SERVER['REMOTE_ADDR'];
        }

        if(isset($_POST['submitted'])) {
            $Name = str_replace("\'", "", trim($_POST['Name'] ?? NULL));
            $sprache = $_POST['sprache'];
            $Email = str_replace("\'", "", trim($_POST['E-Mail'] ?? NULL));
            $fehler = false;
            $fehler1 = false;
            if (empty($Name)) {
                $fehler = 'Name muss gesetzt werden';
            }
            if (empty($Email)) {
                $fehler1 = 'E-Mail-Adresse muss gesetzt werden';
            } else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $fehler1 = 'E-Mail-Adresse ist nicht korrekt formatiert';
            }
            if (!$fehler && !$fehler1) {
                Insert_Anmelder($Name, $Email, $sprache);
            }
        }
        insert_IP($ips,date("d.m.Y"));

        logger()->info($ips.' Zugriff auf Hauptseite');
        return view('werbeseite', [
            'gerichte' => $gerichte,
            'allergen' => $allergen,
            'anzahl_gericht' => $anzahl_gericht,
            'anzahl_anmelder'=>$anzahl_anmelder,
            'anzahl_besucher' => $anzahl_besucher,
        ]);
    }

}
