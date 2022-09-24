<?php
// store the mysql credentials into database
$servername = "localhost";
$username = "u416503160_campusqr";
$password = "Alok@123";
$dbname = "u416503160_campusqr";

// Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

?>
