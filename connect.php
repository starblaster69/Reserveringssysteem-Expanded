<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "timmer_scheer";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Error: " . mysqli_connect_error());
