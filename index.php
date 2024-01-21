<?php


require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('home', 'SecurityController');
Routing::get('login', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('recipe', 'RecipeController');
Routing::get('favourites', 'DefaultController');
Routing::get('brekfast', 'RecipeController');
Routing::get('lunch', 'RecipeController');
Routing::get('dinner', 'RecipeController');
Routing::get('snack', 'RecipeController');
Routing::get('example', 'DefaultController');


Routing::post('home', 'SecurityController');
// Routing::post('login', 'SecurityController');
Routing::run($path);