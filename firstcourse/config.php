<?php
 
 //host
 $host = "localhost";

 //databasename
 $dbname = "learning-php";

 //user
 $user = "root"; 


 //pass
 $pass = "";

 $connection = new PDO("mysql:host=$host;dbname=$dbname;",$user, $pass);

//  if($connection == true){
//     echo "connection established";
//  }else{
//     echo "connection failed";
//  }
?>