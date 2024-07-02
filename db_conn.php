<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "companydb";

$connection = new mysqli($servername, $username, $password, $dbName);

if($connection->connect_error){
    die("Connection failed: ". $connection->connect_error);
}

?>