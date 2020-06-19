<?php

$server="localhost";
$username="root";
$pass="";

$db = new mysqli($server,$username,$pass);

if($db->connect_error){
    die('Error Occurred');
}else
{
    echo "Connection Done </br>";
}

$query = "CREATE DATABASE test";

if($db->query($query)){
    echo "Database Created";
}else{
    echo "Create Database : Error";
    die();
}

$db->close();

