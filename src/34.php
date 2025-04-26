<?php
// Define your database connection details here
$dbhost = "localhost";
$dbname = "schoolprojectdatabase";
$username = "root";
$password = ""; // Replace with your actual password

// Establish a connection to the database
$pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $username, $password);

// SQL query 1: Get all students' names and their grades
$stmt = $pdo->query("SELECT student_id, name, grade FROM students");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// SQL query 2: Find the student with the highest grade
$stmt = $pdo->query("SELECT * FROM students WHERE grade = (SELECT MAX(grade) FROM students)");
$result = $stmt->fetch();

// Output the results
echo "<h1>Students' Names and Grades</h1>";
foreach ($result as $row) {
    echo "$row.name - $row.grade <br>";
}

echo "<h1>The Student with the Highest Grade</h1>";
?>
