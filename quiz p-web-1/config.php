<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_pweb";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Create database
// $sql = "CREATE DATABASE $dbname";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
