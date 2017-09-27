<?php

$db_host = "13.126.202.106";
$db_name = "itcinfo";
$db_user = "appuser";
$db_pass = "appuser";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

