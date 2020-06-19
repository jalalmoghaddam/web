<?php

$server="localhost";
$username="root";
$pass="";
$db = 'test';

$con = new mysqli($server,$username,$pass,$db);

if($con->connect_error){
    die('Error Occurred');
}else
{
    echo "Connection Done </br>";
}

$query = "CREATE TABLE `test`.`mytable` 
          ( `id` INT NOT NULL AUTO_INCREMENT , 
          `user_name` VARCHAR(30) NOT NULL , 
          `password` VARCHAR(30) NOT NULL , 
          `active` BOOLEAN NOT NULL DEFAULT FALSE , 
          PRIMARY KEY (`id`), UNIQUE (`user_name`)) ENGINE = InnoDB;
";

if($con->query($query)){
    echo "Database Created";
}else{
    echo "Create Database : Error";
    die();
}

$con->close();