<?php
require_once('../models/benutzer.php');

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
                letzteAnmeldung($email);
                header('Location: /');
            }else {
                $_SESSION['anmeldung_erfolgreich'] = false;
                $_SESSION['anmeldung_message'] = 'Anmeldung ledier nicht erfolgreich, E-Mail oder Passwort falsch.';
                fehlerAnmeldung($email);
                header('Location: /anmeldung');
            }
        }
    }
    public function logout(){
        session_destroy();
        header('location: /');
    }


}