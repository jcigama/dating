<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Home Page
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Personal Info Page
$f3->route('GET /personal', function() {
    $view = new Template();
    echo $view->render('views/personal-info.html');
});

//Profile Page
$f3->route('GET /profile', function() {
    $view = new Template();
    echo $view->render('views/profile.html');
});

//Interests Page
$f3->route('GET /interests', function() {
    $view = new Template();
    echo $view->render('views/interests.html');
});

//Summary Page
$f3->route('GET /interests', function() {
    $view = new Template();
    echo $view->render('views/summary.html');
});


//Run fat free
$f3->run();