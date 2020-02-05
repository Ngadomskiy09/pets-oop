<?php

/**
 * Nick Gadomskiy
 * 1/15/20
 * http://ngadomskiy.greenriverdev.com/IT328/chicken/
 * chicken
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require("vendor/autoload.php");


session_start();

// Instantiate F3
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function ($f3) {
    $pet1 = new Pet("Johnson", "pink");
    $pet2 = new Pet();
    //var_dump($pet1);

    $f3->set('pet1', $pet1);
    $f3->set('pet2', $pet2);

    $views = new Template();
    echo $views->render("views/my-pets.php");
});

// Run F3
$f3->run();