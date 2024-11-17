<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";
$email = "root";


// mao ni  connection for data base mysql
$conn = new mysqli($servername, $username, $password, $dbname);

// Check sa connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>

