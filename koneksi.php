<?php
    $host = "localhost";
    $user = "root";
    $pw   = "";
    $db   = "bengkelin";

    $koneksi= mysqli_connect($host, $user, $pw, $db);

    error_reporting(E_ALL);
	ini_set('display_errors', 0);
?>