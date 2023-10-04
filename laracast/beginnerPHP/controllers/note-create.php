<?php


$heading = "Create Note";

$config = require('config.php');
$db = new Database($config['database']);


if($_SERVER['REQUEST_METHOD'] === "POST"){

    $errrors =[]; 

    if(strlen($_POST['note']) == 0){

       $errrors['body'] = 'The note can not be empty!';

    }elseif (strlen($_POST['note']) > 1000) {
        $errrors['body'] = 'The note can not be more than 1000 charachters';
    }
    else{
        $db->query('INSERT INTO notes(`body`,`user_id`) VALUES (:body,:user_id)', [
            'body' => $_POST['note'],
            'user_id' => 1
        ]);
        
    }

     
}




require "views/note-create.view.php";