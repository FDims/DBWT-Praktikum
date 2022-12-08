<?php

require_once('../models/gericht.php');

class WerbeseiteController{
    public function werbeseite(RequestData $rd){
        $gerichte = db_gericht_tabelle();
        return view('werbeseite', [
            'gerichte' => $gerichte
        ]);
    }

}