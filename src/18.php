<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "SchoolProject";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Your code here

    $stmt = $conn->prepare("INSERT INTO students (name, age, grade) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $student_name, $student_age, $student_grade);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $conn->close();
?>
