<?php

use Seytar\Routing\Router;
error_reporting(E_ALL ^ E_DEPRECATED);
$env = parse_ini_file('.env');
$url = $env["APP_URL"];

Router::bootstrap(function ($ex) {
    echo '404 - Page Not Found';

});


Route::get("/login",function(){
    require "./view/pages/login.php";

});

Route::post("/login",function(){
    require "./app/controller/AuthController.php";

});

Route::get("/logout",function(){
    session_start();
    session_unset();
    header('Location: ' . $url . "/login");
    exit;

});

Route::get("/dashboard",function(){
    require "./view/pages/dashboard.php";

});

Route::get("/blog",function(){
    require "./view/pages/blog.php";

});

Route::get("/sign-up",function(){
    echo "the router is working finsdfsdfse";

});