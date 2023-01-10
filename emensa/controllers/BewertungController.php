<?php
require_once('../models/benutzer.php');
require_once('../models/gericht.php');
require_once('../models/kategorie.php');
class BewertungController
{
    public function bewertung(){


        if($_SESSION['anmeldung_erfolgereich'])
        {
            if(!isset($_SESSION['vonbewertung'])) $_SESSION['vonbewertung'] = true;
            return view('anmeldung',[]);
        }
        else
        {
            $data = gerichtvonid($_GET['gerichtid']);
            $_SESSION['vonbewertung'] = false;
            return view('bewertung',['data'=>$data]);
        }
    }
}