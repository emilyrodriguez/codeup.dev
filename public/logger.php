<?php

function logMessage($logLevel, $message)
{
    $filename = 'log-' . date('Y-m-d') . '.log';
    $handle = fopen($filename, 'a');
    $formatMsg = date('Y-m-d H:i:S') . " [$logLevel] $message";
    fwrite($handle, $formatMsg);

}

 function logInfo($message) 
 {
 	logMessage('INFO', $message);
 }

 function logError($message) 
 {
 	logMessage('ERROR', $message);

 }

 	logInfo("This is an info message.");
 	logError("This is an info message.");


