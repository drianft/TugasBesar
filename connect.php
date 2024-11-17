<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "curhatkuy";

$koneksi = new mysqli($server, $username, $password, $database);

if ($koneksi->connect_error) {  
    die("Connection failed: " . $koneksi->connect_error);
}


?>