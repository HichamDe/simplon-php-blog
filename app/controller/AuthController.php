<?php
include($_SERVER['DOCUMENT_ROOT'] . "/database/connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$state = $client -> prepare("SELECT * from person where email=? and psw=?");
$state -> bind_param("ss", $email, $password);
$state->execute();

if($state->fetch()){
    echo "logged in successfully";
}else{
    echo "Failed to log you in";
}