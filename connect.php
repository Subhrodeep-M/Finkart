<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "finkart";


$conn = new mysqli($servername, $username, $pass, $dbname);

if ($conn->connect_error) {
     die("Connection failed:" . $conn->connect_error);
}

// echo "Connected successfully";
