<?php
require_once('../models/benutzer.php');
require_once('../models/gericht.php');
//require_once('../models/kategorie.php');
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

        $_SESSION['submitmsg'] = true;
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
        $benutzer = Profil($_SESSION['email']);
        //header('location: /bewertungen');
        return view('bewertungen',['tabelle' => $tabelle,
            'benutzer' => $benutzer]);
    }
    public function meinebewertungenindex(){
        $id = $_SESSION['id'];
        if(!$_SESSION['anmeldung_erfolgreich']){
            $_SESSION['meinebewertungen'] = true;
            header('Location: /anmeldung');
            return view('anmeldung',[]);
        }
        $tabelle = meinebewertungen($id);
        return view('meinebewertungen',['tabelle' => $tabelle]);
    }

    public function hervorhebung(RequestData $rd){
        $id = $_GET['hervorhebenid'];
        $link = connectdb();
        $link->begin_transaction();
        $link->query("UPDATE bewertung SET hervorgehoben=!hervorgehoben WHERE id ='$id'");
        $link->commit();
        header('location: /bewertungen');
    }
    public function loeschen(){
        $id = $_GET['bid'];
        $link = connectdb();
        $link->begin_transaction();
        $link->query("DELETE FROM bewertung WHERE id ='$id'");
        $link->commit();
        header('location: /meinebewertungen');
    }
}