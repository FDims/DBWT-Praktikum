<?php
/**
 * Mapping of paths to controllers.
 * Note, that the path only supports one level of directory depth:
 *     /demo is ok,
 *     /demo/subpage will not work as expected
 */

return array(
    '/'             => "WerbeseiteController@werbeseite",
    "/demo"         => "DemoController@demo",
    '/dbconnect'    => 'DemoController@dbconnect',
    '/debug'        => 'HomeController@debug',
    '/error'        => 'DemoController@error',
    '/requestdata'   => 'DemoController@requestdata',
    '/log'          => 'DemoController@log',
    '/anmeldung'    =>'AnmeldungController@login',
    '/anmeldung_verifizieren' =>'AnmeldungController@verifizieren',
    '/abmelden'     =>'AnmeldungController@logout',
    '/profil'       =>'ProfilController@profilList',
    '/bewertung'    => 'BewertungController@index',
    '/submitbewertung' =>'BewertungController@submitbewertung',
    '/bewertungen'    => 'BewertungController@bewertungenindex',
    '/meinebewertungen'    => 'BewertungController@meinebewertungenindex',
    '/hervorheben'       =>  'BewertungController@hervorhebung',
    '/bewertungloeschen'       =>  'BewertungController@loeschen',

    // Erstes Beispiel:
    '/m4_7a_queryparameter' => 'ExamplesController@m4_7a_queryparameter',
    '/m4_7b_kategorie' => 'ExamplesController@m4_7b_kategorie',
    '/m4_7c_gerichte' => 'ExamplesController@m4_7c_gerichte',
    '/m4_7d_layout' => 'ExamplesController@m4_7d_layout',
    '/homealt' => 'HomeController@index',
);