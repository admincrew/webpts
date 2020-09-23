<?php
$conn = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
<<<<<<< HEAD
    'name' => 'pts'
];
$call = mysqli_connect($conn['host'], $conn['user'], $conn['pass'], $conn['name']);
if (!$call) {
    die("Connection Failed!");
    error_log("Connection Failed : " . mysqli_connect_error());
}
=======
<<<<<<< HEAD
    'name' => 'pts'
=======
    'name' => 'pts_smp10'
>>>>>>> 381dd0bd9b0c5b27d2485a524c8dc87b56dcc9bf
];
$call = mysqli_connect($conn['host'],$conn['user'],$conn['pass'],$conn['name'])
if(!$call) { die("Connection Failed!"); error_log("Connection Failed : ".mysqli_connect_error()); }
>>>>>>> ba74732739cef848085e043409b2274c85d528be
