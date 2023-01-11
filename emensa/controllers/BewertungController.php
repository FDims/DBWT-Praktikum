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
            $_SESSION['gerichtid'] = $_GET['gerichtid'];
            header('Location: /anmeldung');
            return view('anmeldung',[]);
        }
        else
        {
            $data = gerichtvonid($_GET['gerichtid']);
            $_SESSION['vonbewertung'] = false;
            if($data == null) header('location: /');
            else return view('bewertung',['data'=>$data]);
        }
    }

    public function submitbewertung(RequestData $rd){

        $benutzerid = $_SESSION['id'];
        //$isAdmin = isAdmin($name);
        $text = $rd->query['bemerkung'];
        $gerichtid = $rd->query['gerichtid'];
        //$gericht = gerichtvonid($gerichtid);
        $sterne = $rd->query['sterne'];

        addBewertung($benutzerid , $text , $gerichtid ,$sterne);

        header('location: /');
    }

    public function bewertungenindex(){
        $tabelle = letzte30bewertung();
        //header('location: /bewertungen');
        return view('bewertungen',['tabelle' => $tabelle]);
    }
    public function meinebewertungenindex(){
        $id = $_SESSION['id'];
        if(!$_SESSION['anmeldung_erfolgreich']){
            header('Location: /anmeldung');
            return view('anmeldung',[]);
        }
        $tabelle = meinebewertungen($id);
        return view('meinebewertungen',['tabelle' => $tabelle]);
    }
}