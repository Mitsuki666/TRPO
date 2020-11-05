<?php

use Semenov\SolutionQuatro;

include "core\EquationInterface.php";
include "core\LogAbstract.php";
include "core\LogInterface.php";
include "Semenov\MyLog.php";
include "Semenov\SolutionLine.php";
include "Semenov\SolutionQuatro.php";

\Semenov\MyLog::log("qazxswedc");
\Semenov\MyLog::write();

$p = new \Semenov\SolutionQuatro();
var_dump ( $p->solve(0,4,2));
?>