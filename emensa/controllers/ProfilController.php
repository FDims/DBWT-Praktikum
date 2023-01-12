<?php
require_once('../models/benutzer.php');
class ProfilController
{
    public function profilList(RequestData $rd){
        $name = $_SESSION['email'];
        $list = Profil($name);
        return view('profil',['list'=>$list]);
    }
}