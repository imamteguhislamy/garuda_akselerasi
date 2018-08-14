<?php
//Koneksi ke Database
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "garuda_culturetrack";
// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if (!$con) die('Could not connect: ' . mysqli_error());


?>