<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "af";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) 
{
    echo "Connection is not successfull ";
}


 
?>