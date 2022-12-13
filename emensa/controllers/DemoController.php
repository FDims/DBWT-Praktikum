<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/../models/gericht.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/../models/kategorie.php');

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class DemoController
{
    public function dbconnect() {
        $data = db_gericht_select_all();
        // Frage Daten aus kategorie ab:
        // $data = db_kategorie_select_all();
        return view('demo.dbdata', ['data' => $data]);
    }

    public function demo(RequestData $rd) {
        $vars = [
            'bgcolor' => $rd->query['bgcolor'] ?? 'ffffff',
            'name' => $rd->query['name'] ?? 'Dich',
            'rd' => $rd
        ];
        return view('demo.demo', $vars);
    }

    /**
     * error action for debug purposes
     * @throws Exception
     * @noinspection PhpUnusedLocalVariableInspection
     */
    public function error(RequestData $rd) {
        $test = $rd;
        throw new Exception("Not implemented");
    }

    public function requestdata(RequestData $rd) {
        return view('demo.requestdata', ['rd' => $rd]);
    }
    public function log(){
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('../storage/logs/log.txt', Level::Warning));

// add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    }
}