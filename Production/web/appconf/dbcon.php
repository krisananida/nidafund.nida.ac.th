<?php

// Connection variables
$host = "localhost"; // MySQL host name eg. localhost
$user = "c1nidafund2018"; // MySQL user. eg. root ( if your on localserver)
$password = "Xg#sXfSBc28rN"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "c1nidafund2018db"; // MySQL Database name

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
