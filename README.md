Student Registration System

This is a simple PHP web application for registering students into a MySQL database.

Features:
- Registration form with fields: Full Name, Email, Department, Matric Number
- Input validation (all fields required, email must be valid)
- Stores records in MySQL database (student_records table)
- Displays all registered students in a table
- Extra: Delete button to remove a student record

Files in this Repository:
- connect.php : Database connection file
- index.php : Registration form
- process.php : Handles form validation and saving data
- view.php : Displays all registered students
- student_db.sql : Database table structure

How to Run:
1. Import student_db.sql into your MySQL database
2. Update connect.php with your database credentials
3. Open index.php in a browser to register students
4. Open view.php to see the registered students

Author:
Name: Peter Aquah
Reg Number: 22/CSC/241D
Course: CSC 200L
University of Cross River State
Date: 03 September 2025
