<?php
$conn = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'pts_smp10'
];
$call = mysqli_connect($conn['host'],$conn['user'],$conn['pass'],$conn['name'])
if(!$call) { die("Connection Failed!"); error_log("Connection Failed : ".mysqli_connect_error()); }