<?php
// Include the database connection file
include 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reg_number = $_POST['reg_number'];

    // Insert data into the database
    $sql = "INSERT INTO students (name, email, reg_number) 
            VALUES ('$name', '$email', '$reg_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
