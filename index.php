<?php


require 'Routing.php';
// require_once 'Repository.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);


if(isset($_POST)) {
    $data = file_get_contents("php://input");
    $recipe = json_decode($data, true);

    echo $recipe["description"];
}

Routing::get('gluco', 'DefaultController');
Routing::get('', 'DefaultController');
Routing::get('home', 'SecurityController');
Routing::get('login', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('recipe', 'RecipeController');
Routing::get('favourites', 'RecipeController');
Routing::get('brekfast', 'RecipeController');
Routing::get('lunch', 'RecipeController');
Routing::get('dinner', 'RecipeController');
Routing::get('snack', 'RecipeController');

Routing::post('home', 'SecurityController');
Routing::post('gluco', 'DefaultController');
Routing::run($path);