<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university_student_room_rental_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

// Perform your database operations here

// Close connection

?>