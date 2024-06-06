<?php

$env = parse_ini_file('.env');
$servername = $env["DATABASE_URL"];
$datbaseName = $env["DATABASE_NAME"];
$username = $env["DATABASE_USERNAME"];
$password = $env["DATABASE_PASSWORD"];

// Create connection
$client = new mysqli($servername, $username, $password,$datbaseName);

// Check connection
if ($client->connect_error) {
    die("Connection failed: " . $client->connect_error);
}
