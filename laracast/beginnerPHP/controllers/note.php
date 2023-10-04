<?php


$heading = "The Note";
$CurrentUserId = 1;

$config = require('config.php');
$db = new Database($config['database']);



$note = $db->query("SELECT * FROM `notes` where id= :id", [
        ':id' => $_GET['id']
    ])->findOrFail(); 



authorize($note['user_id'] === $CurrentUserId);

require "views/note.view.php";