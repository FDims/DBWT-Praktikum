<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/../models/kategorie.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/../models/gericht.php');
class ExampleController
{
    public function m4_7a_queryparameter(RequestData $rd) {
        /*
           Wenn Sie hier landen:
           bearbeiten Sie diese Action,
           so dass Sie die Aufgabe löst
        */
        return view('examples.m4_7a_queryparameter', [
            'request'=>$rd,
            'name' => 'Jer',
            'url' => 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"
        ]);
    }
    public function m4_7b_kategorie(RequestData $rd){
        return view('s',[]);
    }
    public function m4_7c_gerichte(RequestData $rd){
        return view('s',[]);
    }
    public function m4_7d_layout(RequestData $rd){
        return view('s',[]);
    }
}