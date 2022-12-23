<?php
require_once('../models/benutzer.php');
class ProfilController
{
    public function profilList(RequestData $rd){
        $email = $_SESSION['email'];
        $list = Profil($email);
        return view('profil',['list'=>$list]);
    }
}