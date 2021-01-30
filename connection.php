<?php
$servername = "sql12.freesqldatabase.com";
$dbname = "sql12389718";
$username = "sql12389718";
$password = "Please wait";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
?>
