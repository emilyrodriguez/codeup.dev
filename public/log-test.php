<?php
require_once "log.php";
date_default_timezone_set("America/Chicago");
$test = new Log();
$test->filename = "log-" . date("Y-m-d") . ".log";
$test->info("Look, an info message!" . PHP_EOL);
$test->error("Look, an error message!" . PHP_EOL);
?>