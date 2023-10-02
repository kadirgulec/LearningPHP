<?php

require 'views/config/hrefs.config.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    $home => 'controllers/index.php',
    $about => 'controllers/about.php',
    $contact => 'controllers/contact.php', 
    $notesPage => 'controllers/notes.php', 
    $notePage => 'controllers/note.php', 

];

function abort($code = 404){
    http_response_code($code);
    require "views/{$code}.view.php";
    die();
}

function routeToController ($uri,$routes, $code = 404){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort($code);
    }
}

routeToController($uri, $routes);