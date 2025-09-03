<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="process.php" method="post">
        <label>Full Name:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Matric Number:</label><br>
        <input type="text" name="matricnumber" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
