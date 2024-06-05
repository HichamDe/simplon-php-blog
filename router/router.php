<?php

use Seytar\Routing\Router;
error_reporting(E_ALL ^ E_DEPRECATED);

Router::bootstrap(function ($ex) {
    echo '404 - Page Not Found';

});


Route::get("/login",function(){

    require "./view/pages/login.php";

});

Route::get("/sign-up",function(){

    echo "the router is working finsdfsdfse";

});