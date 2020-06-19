<?php

//include_once ("config.php");

$server="localhost";
$username="root";
$pass="";
$db="test";

$con = new mysqli($server,$username,$pass,$db);

if($con->connect_error){
    die('error occurred');
}else
{
    echo "Done";
}

$con->close();
