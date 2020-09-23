<?php
//error_reporting('0');
date_default_timezone_set('Asia/Jakarta');
ini_set('memory_limit', '1024M');
$date = date("Y-m-d");
$time = date("H:i:s");

include 'mainconnect.php';
function _DIR_($path)
{
    global $_SERVER;
    return $_SERVER['DOCUMENT_ROOT'] . '/' . $path;
};

//function
require _DIR_('mainfunction.php');
