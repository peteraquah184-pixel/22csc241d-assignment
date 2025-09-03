<?php
// Include the database connection file
include 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $matric_number = $_POST['matric_number'];

    // Insert data into the database
    $sql = "INSERT INTO students (name, email, reg_number) 
            VALUES ('$name', '$email', '$matric_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
