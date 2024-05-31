<?php

$server = "dbbloging.mysql.database.azure.com";
$username = "albatin";
$password = "Grupi7123";
$dbname = "blog_platform";
$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
