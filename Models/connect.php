<?php
    $host = "localhost";
    $userDB = "root";
    $passDB = "";
    $nameDB = "1TTT";
    $connect = new mysqli($host, $userDB, $passDB, $nameDB);
    $connect->set_charset("utf8");
    if ($connect->connect_error) {
    	die("Failed !" . $connect->connect_error);
    }
?>
