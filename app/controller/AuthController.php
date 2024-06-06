<?php

include($_SERVER['DOCUMENT_ROOT'] . "/database/connect.php");

$email = $_POST['email'];
$password = $_POST['password'];
$env = parse_ini_file('.env');
$url = $env["APP_URL"];


$state = $client->prepare("SELECT * from person where email=? and psw=?");
$state->bind_param("ss", $email, $password);
$state->execute();

if ($state->fetch()) {
    session_start();
    $_SESSION["isLoggedIn"] = true;
    header('Location: ' . $url . "/dashboard");
    exit;
} else {
    header('Location: ' . $url . "/login");
    exit;
}
