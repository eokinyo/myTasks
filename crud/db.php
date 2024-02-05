<?php
$servername = "web-dev-env-main-db-1";
$username = "app1";
$password = "@!noSalmi1993";
$dbname = "App1";

//Create a database connection

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
?>