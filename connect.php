<?php
// Database connection file

$servername = "localhost";   // server name (local server)
$username   = "root";        // default MySQL username
$password   = "";            // default MySQL password (blank for XAMPP/WAMP)
$dbname     = "student_db";  // database name (must match student_db.sql)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Uncomment the line below if you want to test locally
    // echo "Database connection successful!";
}
?>
