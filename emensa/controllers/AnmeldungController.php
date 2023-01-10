<?php
require_once('../models/benutzer.php');
//require_once ($_SERVER['DOCUMENT_ROOT'].'/beispiele/m5_5.sql');

class AnmeldungController
{

    public function login(RequestData $rd){
        $var = $_SESSION['anmeldung_message']??null;
        return view('anmeldung',['var'=>$var]);
    }
    public function verifizieren(RequestData $rd)
    {
        $link=connectdb();
        $password=$_POST['password'];
        $email=$_POST['email'];
        $email = mysqli_real_escape_string($link,$email);
        $password = mysqli_real_escape_string($link,$password);
        $result = db_benutzer_anmeldung($email);
        $user = mysqli_fetch_assoc($result);
        $_SESSION['anmeldung_message'] = null;


        if ($result) {
            if(sha1('Team_905'.$password)==$user['passwort']){
                $check=true;
            }else{
                $check=false;
            }
            if ($check) {
                $_SESSION['anmeldung_erfolgreich'] = true;
                $_SESSION['anmeldung_message'] = 'Anmeldung erfolgreich!';
                $_SESSION['email'] = $user['name'];
                //letzteAnmeldung($email);
                //$sid = $user['id'];
                //$sql1 = "CALL anzahlanmeldungen('$sid');";
                //mysqli_query($link,$sql1);
                loginTransaktion($email);
                logger()->info($_POST['email'].' Anmeldung');
                if(isset($_SESSION['vonbewertung'])) {if($_SESSION['vonbewertung'])header('/bewertung');}
                else header('Location: /');
            }else {
                $_SESSION['anmeldung_erfolgreich'] = false;
                $_SESSION['anmeldung_message'] = 'Anmeldung leider nicht erfolgreich, E-Mail oder Passwort falsch.';
                fehlerAnmeldung($email);
                logger()->warning($_POST['email'].' Fehler bei Anmeldung');
                header('Location: /anmeldung');
            }
        }
    }
    public function logout(){
        logger()->info($_SESSION['email'].' Abmeldung');
        session_destroy();
        header('location: /');
    }


}