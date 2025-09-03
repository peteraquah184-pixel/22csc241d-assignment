<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM student_records WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully. <a href='view.php'>Go back</a>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
