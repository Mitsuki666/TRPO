<?php

use Semenov\MyLog;
use Semenov\SolutionQuatro;
use Semenov\SemenovException;

require_once __DIR__ . '/vendor/autoload.php';

ini_set('error_reporting', E_ALL);
try {
    $version = file_get_contents("version");
    MyLog::log("Версия программы ".$version);
    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Ввод " . $i . " Аргумента: ";
        $values[] = readline();
    }
    $aa = $values[0];
    $ab = $values[1];
    $ac = $values[2];


    MyLog::log("Переменные: (". $aa .",". $ab .",". $ac .")");

    $p = new SolutionQuatro();
    $x = $p->solve($aa, $ab, $ac);

    $str = implode(", ", $x);
    MyLog::log("Корни: " . $str);
} catch (SemenovException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();

?>