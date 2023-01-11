<?php
require_once('../models/benutzer.php');
require_once('../models/gericht.php');
require_once('../models/kategorie.php');
require_once('../models/bewertung.php');
class BewertungController
{
    public function index(){


        if(!$_SESSION['anmeldung_erfolgreich'])
        {
            $_SESSION['vonbewertung'] = true;
            header('Location: /anmeldung');
            return view('anmeldung',[]);
        }
        else
        {
            $data = gerichtvonid($_GET['gerichtid']);
            $_SESSION['vonbewertung'] = false;
            return view('bewertung',['data'=>$data]);
        }
    }

    public function submitbewertung(RequestData $rd){

        $benutzerid = $_SESSION['id'];
        //$isAdmin = isAdmin($name);
        $text = $rd->query['bemerkung'];
        $gerichtid = $rd->query['gerichtid'];
        //$gericht = gerichtvonid($gerichtID);
        $sterne = $rd->query['sterne'];

        addBewertung($benutzerid , $text , $gerichtid ,$sterne);

        header('location: /');
    }
}