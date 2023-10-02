<?php


$heading = "The Note";

$config = require('config.php');
$db = new Database($config['database']);



$note = $db->query("SELECT * FROM `notes` where id= :id", [
    
    ':id' => $_GET['id']
    ] )->fetch(); 

if (!$note) {
    abort();
}

$CurrentUserId = 1;

if($note['user_id'] !== $CurrentUserId){
    abort (Response::FORBIDDEN);
}

require "views/note.view.php";